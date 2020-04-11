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
		require "../models/db_connect.php";
		$rn = "";
		$err_rn = "";
		$msg = "";
		if(isset($_POST['remove']))
		{
			if(empty($_POST['rn']))
			{
				$err_rn = "Enter Room number";
			}
			else
			{
				$rn = $_POST['rn'];
				$query = "DELETE FROM room WHERE room_number='$rn'";
				execute($query);
				$msg = "Room has been deleted!";
			}
		}
	?>
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
				<span style="text-align: left;">
				&nbsp <a href="../index.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					&nbsp <font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			<div style="text-align: center;">
				<font size="8" style="color: white;">Remove Room</font>
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
						<td>Room Number <input type="text" name="rn"></td>
					</tr>
				</table>
				<br>
				<input type="submit" name="remove" value="Remove">
			</form>
		</center>
	</body>
</html>