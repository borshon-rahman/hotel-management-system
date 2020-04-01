<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:login.php");
	}
?>
<html>
	<title>Reception</title>
	<head></head>
	<body>
		<form method="post" action="" style="text-align: right;">
			<input type="submit" name="logout" value="Log out">
		</form> 
	    <div style="background-image: url(images/reception.jpg); height: 500;width: 100%; background-repeat: no-repeat; background-size: 100% 100%;">
	    	<span style="text-align: left;">
				<a href="home.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
	    	
	    </div>
	    <br>
		<hr>
		<div style="text-align: center; background-color: blue">
			<a href="room_reserve.php"><font size="10" style="color: white">Reserve Room</font></a>
		</div>
		<div style="text-align: center; background-color: rgb(150,213,230);">
			<a href=""><font size="10" style="color: rgb(43,10,166);">Room Availability</font></a>
		</div>
		<div style="text-align: center; background-color: rgb(110,113,230);">
			<a href=""><font size="10" style="color: rgb(43,10,166);">Reservation Request</font></a>
		</div>
	</body>
</html>