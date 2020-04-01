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
	<title></title>
	<head></head>
	<body style="background-color: green;">
	<?php
		$rn = "";
		$err_rn = "";
		$rtype = "";
		$msg = "";
		if(isset($_POST['add']))
		{
			$rtype = htmlspecialchars($_POST['rtype']);
			if(empty($_POST['rn']))
			{
				$err_rn = "Enter Room number";
			}
			else
			{
				$rn = $_POST['rn'];
				$xml = new DOMDocument();
					$xml->load("data/room.xml");
					$rootTag = $xml->getElementsByTagName("room_data")->item(0);
					$roomTag = $xml->createElement("room");
					$roomTag->setAttribute("type", "$rtype");
						$room_numberTag = $xml->createElement("room_number", $rn);
							$roomTag->appendChild($room_numberTag);
					$rootTag->appendChild($roomTag);
					$xml->save("data/room.xml");

					$msg = "Room Added!";
			}
		}
	?>
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
				<span style="text-align: left;">
				&nbsp <a href="home.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					&nbsp <font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			<div style="text-align: center;">
				<font size="8" style="color: white;">Add Room</font>
			</div>
			<div>
				<div style="text-align: right;"><input type="submit" name="logout" value="Log out" style="background-color: rgb(11, 13, 71); color: gray;">
				</div>
			</div>
		</form>
		<hr>
		<center>
			<font size="4" style="color: blue;"><?php echo "$msg"; ?></font>
			<form method="post" action="">
				<table>
					<tr>
						<td>Room Number <input type="Number" name="rn"></td>
					</tr>
					<tr>
						<td>Room Type <select name="rtype"><option>Deluxe</option><option>Luxury</option><option>Guest House</option><option>Single</option></select>
						</td>
					</tr>
				</table>
				<br><br>
				<input type="submit" name="add" value="Add">
			</form>
		</center>
	</body>
</html>