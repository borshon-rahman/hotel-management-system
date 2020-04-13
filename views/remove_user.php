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
	<head></head>
	<body style="background-image: url(../storage/images/image.png); background-color: yellow; background-blend-mode: lighten;">
		<?php
			require "../models/db_connect.php";
			$uname = "";
			$err = "";
			$msg = "";
			if(isset($_POST['delete']))
			{
				if(empty($_POST['uname']))
				{
					$err = "Enter Username";
				}
				else
				{
					$uname = htmlspecialchars($_POST['uname']);

					$query = "DELETE FROM login WHERE user_name='$uname'";
					execute($query);
					$msg = "User Removed";
				}
			}
		?>
		
		<form method="post" action="">
			<center>
				<span><font size="4" style="color: red"><b><?php echo "$msg"; ?></b></font></span>
				<table>
					<tr>
						<td><b>Username </b></td>
						<td><input type="text" name="uname"> &nbsp <font size="2" style="color: red"><b><?php echo "$err"; ?></b></font></td>
					</tr>
				</table>
				<input type="submit" name="delete" value="Discard">
			</center>
		</form>
	</body>
</html>