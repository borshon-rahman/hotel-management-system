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