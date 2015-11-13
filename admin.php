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
	<form action="admin_login.php"  method="Post">
		ADMIN NAME:
		<input type="text" placeholder="Your Name" name="admin_id" required> <br> <br>
		Password :
		<input type="password"	placeholder="Password" name="admin_pass" required> <br><br><br><br><br><br>
		<input type="submit" style="height:50px; width:200px" value="Submit">
	</form>
<br><br />
</center>
<form action="home.php" class="two" method="post">
<center><button style="height:50px; width:200px" type="submit" >Home</button></center>
</form>
</body>
</html>
