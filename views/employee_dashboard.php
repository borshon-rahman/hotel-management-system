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
	<head>
		<style type="text/css">
			#navigation {
				line-height: 40px;
				height: 300px;
				width: 300px;
				background-color: rgb(11, 13, 71);
				float: left;
				padding: 5px;
			}
			#content {
				width: 1183px;
				float: left;
				padding: 5px;
			}
		</style>
		<script>
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
			function available_room()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","available_room.php",true);
				xhttp.send();
			}
			function reserved_room()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","reserved_room.php",true);
				xhttp.send();
			}
		</script>
	</head>
	<body style="background-color: rgb(236,190,20); background-image: url(../storage/images/admin.jpg); background-blend-mode: lighten;">
		<div style="background-color: rgb(11, 13, 71)">
			<form method="post" action="" style="text-align: right;">
				<input type="submit" name="logout" value="Log out">
			</form> 
	    	<div style="background-image: url(../storage/images/reception.jpg); height: 400;width: 100%; background-repeat: no-repeat; background-size: 100% 100%;">
	    		<span style="text-align: left;">
					<a href="../index.php" style="text-decoration: none;"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
						<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
					</a>
				</span>
	    	</div>
	    	<br>
	    </div>
		<hr>
		<div id="navigation">
			<a href="javascript:;" onclick="room_reserve()" style="text-decoration: none;"><font size="6" style="color: white">Reserve Room</font></a><br><br>
			<a href="javascript:;" onclick="available_room()" style="text-decoration: none;"><font size="6" style="color: white;">Available Room</font></a><br><br>
			<a href="javascript:;" onclick="reserved_room()" style="text-decoration: none;"><font size="6" style="color: white;">Reserved Room</font></a><br><br>
			<a href="" style="text-decoration: none;"><font size="6" style="color: white;">Reservation Request</font></a>
		</div>
		<div id="content">
			
		</div>
	</body>
</html>