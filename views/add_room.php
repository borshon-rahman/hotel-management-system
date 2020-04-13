<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	/*if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:login.php");
	}*/
?>

<html>
	<title></title>
	<head></head>
	<body style="background-color: green;">
	<?php
		require "../models/db_connect.php";
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
				$query = "INSERT INTO room VALUES ('$rn','$rtype')";
				execute($query);
				$msg = "Room Added!";
			}
		}
	?>
		
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