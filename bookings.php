<html>
<head> <title>ROOM BOOKING |IIT MANDI </title> </head>
 <body background="bg.jpg">
<center>
<h2> Room Booking System</h2> <br> <br>
<?php
session_start();
echo "name=".$_SESSION['name']."<br>";
$name=$_SESSION['name'];
	$conn = mysql_connect("localhost","root","9417526858");
	if(!$conn) {
		echo "Could not connect : ".mysql_error();
	}
	else {
		mysql_select_db("proj");
	
	
		if(!mysql_query("INSERT INTO Bookings (RoomNo,Date,Time,Name,Booking_type) VALUES ('$_POST[roomno]','$_POST[date]','$_POST[time]','$name','$_POST[booking_type]')",$conn)) {
				echo "Bookings alreaddy exists";
			}
			else {
				$date=$_POST['date'];
				$timestamp = strtotime($date);
				$day = date('l', $timestamp);
				
				$sql=mysql_query("SELECT * FROM TimeTable where RoomNo='$_POST[roomno]' and Day='$day' and Time='$_POST[time]'",$conn);
				$rowcount=mysql_num_rows($sql);
				if($rowcount)	{
					echo "TimeTable schedule";
				}	
				else{
					echo "Booking added successfully!";	
				}
				mysql_close($conn);
			}
	}


if($_GET['logout'])
{
$_SESSION['loggedin']=0;
session_destroy();
header("Location: home.php");
}
?>
</center>
 <br> <br> <br> <br>
<form action="home.php" class="two" method="post">
<center><button style="height:50px; width:200px" type="submit" >Home</button></center>
</form>
<br><br>
<form action="?logout=1" method="post">
<input type="submit" value="logout">
</form>
</body>
</html>
