<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>

<html>
	<title></title>
	<head>	
		<script src="scripts/client_dashboard_scripts.js"></script>
	</head>
	<body>
		<div style="background-color: rgb(11, 13, 71);">
		<table>
			<tr>
				<td><a href="../index.php" style="text-decoration: none;"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font></a>
				</td>
				<td valign="bottom"><a href="../index.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Home</font></a></td>
				<td></td>
				<td valign="bottom"><a href="javascript:;" onclick="room_reserve();" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Reserve Room</font></a></td>
				<td></td>
				<td valign="bottom"><a href="../controller/logout.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);"><b>Logout</b></font></a></td>
			</tr>
		</table>
		</div>
		<div>
			<h1 style="text-align: center;">Account Information</h1>
		</div>
		<div id="content">
			
		</div>
	</body>
</html>