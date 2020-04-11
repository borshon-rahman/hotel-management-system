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
	<title>Admin</title>
	<head></head>
	<body style="background-color: rgb(236,190,20); background-image: url(../storage/images/admin.jpg); background-blend-mode: lighten;">
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
			<span style="text-align: left;">
				<a href="../index.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			<div style="text-align: center;">
				<font size="8" style="color: white;">Admin Panel</font>
				<div style="text-align: right;"><input type="submit" name="logout" value="Log out" style="background-color: rgb(11, 13, 71); color: gray;">
				</div>
			</div>
		</form>
		<hr>
		<br><br>
		<div>
			<div>
				<font size="15"><u>Manage User </u>-></font> <a href="add_user.php"><font size="8" style="color: rgb(168,58,58);">Add user</font></a> &nbsp &nbsp <a href="remove_user.php"><font size="8" style="color: rgb(168,58,58);">Remove user</font></a>
			</div>
			<br>
			<div>
				<font size="15"><u>Manage Rooms </u>-></font> <a href="add_room.php"><font size="8" style="color: rgb(168,58,58);">Add Room</font></a> &nbsp &nbsp <a href="remove_room.php"><font size="8" style="color: rgb(168,58,58);">Remove Room</font></a> &nbsp &nbsp <a href="room_reserve.php"><font size="8" style="color: rgb(168,58,58);">Reserve Room</font></a>
				<br>
				<a href=""><font size="8" style="color: rgb(168,58,58);">Room Reservation Requests</font></a>
			</div>
		</div>
	</body>
</html>