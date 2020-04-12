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
	<head>
		<style type="text/css">
			#navigation {
				line-height: 40px;
				height: 500px;
				width: 250px;
				background-color: rgb(11, 13, 71);
				float: left;
				padding: 5px;
			}
			#content {
				width: 1200px;
				float: left;
				padding: 5px;
			}
		</style>
		<script>
			function add_user()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","add_user.php",true);
				xhttp.send();
			}
			function remove_user()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","remove_user.php",true);
				xhttp.send();
			}
			function add_room()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","add_room.php",true);
				xhttp.send();
			}
			function remove_room()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","remove_room.php",true);
				xhttp.send();
			}
			function room_reserve()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","room_reserve.php",true);
				xhttp.send();
			}
		</script>
	</head>
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
			<div id="navigation">
				<font size="6" style="color: white;">Manage User</font><br>
				<font size="4" style="color: rgb(168,58,58);" onclick="add_user()">Add user</font><br>
				<font size="4" style="color: rgb(168,58,58);" onclick="remove_user()">Remove user</font><br><br>
				<font size="6" style="color: white;">Manage Rooms</font><br>
				<font size="4" style="color: rgb(168,58,58);" onclick="add_room()">Add Room</font><br>
				<font size="4" style="color: rgb(168,58,58);" onclick="remove_room()">Remove Room</font><br>
				<font size="4" style="color: rgb(168,58,58);" onclick="room_reserve()">Reserve Room</font><br>
				<a href=""><font size="6" style="color: rgb(168,58,58);">Room Reservation Requests</font></a>
			</div>
			<div id="content">
				
			</div>
	</body>
</html>