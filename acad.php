<?php
session_start();
echo "Name = ".$_SESSION['name']."<br>";
?>
<html>
<body text="black" link="663300" alink="black" vlink="663300">
<head><title>Room Booking System,IIT MANDI</title>
<script src="jquery-1.6.2.min.js"></script>
<script src="jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="jquery/jqueryCalendar.css">
<script>
                jQuery(function() {
                                jQuery( "date" ).datepicker();
                });
                </script></head>
<style type="text/css">
.one
{ 	
	font-size:70;
	color:red;
	left:50%;
	position:center;
	ackground-colr:yellow;
}
.two
{ 	
	font-size:70;
	color:red;
	left:80%;
	top:10%;
}
</style>
<h1 class="one" align="middle">Bookings</h1>
<br /><br /><br />
<br /><br />
<center>
<p align="middle"><font size="40">Select among the following</font></p><br /><br />
	<form action="bookings.php"  method="Post">
		Room No.:
		<input type="text" placeholder="Your Name" name="roomno" autofocus required> <br> <br>
		Date :
		<input type="date" name="date"  required> <br><br><br>
		Time:
		<input type="time" placeholder="Your Name" name="time" required> <br> <br>
		Booking Type :
		<input type="radio"  name="booking_type" value="Conference" checked="checked"> Conference 
		<input type="radio" name="booking_type" value="Club Activity" > Club Activity 
		<input type="radio" name="booking_type" value="Lecture" > Lecture 
		<br><br><br>
				
		<input type="submit" style="height:50px; width:200px" value="Submit"><script src="sh1.js" type="text/javascript"></script>
	</form>
<br><br />
</center>
<form action="home.php" class="two" method="post">
<center><button style="height:50px; width:200px" type="submit" >Home</button></center>
</form>
</body>
</html>
