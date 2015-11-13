<?php
session_start();



$conn = mysql_connect("localhost","root","9417526858");
	if(!$conn) {
		die("Could not connect");
	}
	else mysql_select_db("proj");
if($_GET['login'])
{
$sql="SELECT * FROM Users where Userid = '{$_POST['userid']}' and Password = '{$_POST['password']}'";
$query=mysql_query($sql);

if($result=mysql_fetch_array($query))
{
$_SESSION['loggedin']=1;
$_SESSION['userid']=$result['Userid'];
$_SESSION['name']=$result['Name'];
header("Location: acad.php");
exit;
}
else echo "Incorrect login details. Try again!";
}
?>


<html>


<style type="text/css">
.one
{ 	color:blue;
	position:absolute;
	top:50%;
	left:30%;
}
.two
{ 	
	color:blue;
	position:absolute;
	top:58%;
	left:45%;
}
</style>
<head> <title>Admin Login</title> </head>
<body background="bg.jpg"> 
<center>
<h1> </h1> <br> <br>
<h2> Please login to continue </h2>
	<form action="?login=1"  method="Post">
		NAME:
		<input type="text" placeholder="Your Name" name="userid" required> <br> <br>
		Password :
		<input type="password"	placeholder="Password" name="password" required> <br><br><br><br><br><br>
		<input type="submit" style="height:50px; width:200px" value="Submit">
	</form>
<br><br />
</center>
<form action="home.php" class="two" method="post">
<center><button style="height:50px; width:200px" type="submit" >Home</button></center>
</form>
</body>
</html>
