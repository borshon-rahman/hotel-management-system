<?php
			require "db_connect.php";
			$uname = "";
			$pass = "";
			$err_uname = "";
			$err_pass = "";
			$has_error = false;
			$invalid = "";
			if(isset($_POST['login']))
			{
				if(empty($_POST['uname']))
				{
					$err_uname = "*Username is required";
					$has_error = true;
				}
				else
				{
					$uname = htmlspecialchars($_POST['uname']);
				}
				if(empty($_POST['pass']))
				{
					$err_pass = "*Password is required";
					$has_error = true;
				}
				else
				{
					$pass = htmlspecialchars($_POST['pass']);
				}
				if(!$has_error)
				{
					$query = "SELECT name FROM users WHERE user_name='$uname' AND password='$pass'";
					$result= execute($query);
					if(mysqli_num_rows($result) > 0)
					{
						//$row = mysqli_fetch_assoc($result);
						session_start();
						$_SESSION['loggedinuser'] = $uname;
						header("Location:dashboard.php");
					}
					else
					{
						$invalid = "Invalid User";
					}
				}
			}
?>

<html>
	<title></title>
	<head></head>
	<body>
		<span style="text-align: center; color: red;"><?php echo $invalid; ?></span>
		<form method="post" action="">
			<table align="center" border="1" style="border-collapse: collapse;">
				<tr>
					<th colspan="2">Login</th>
				</tr>
				<tr>
					<td>Username </td>
					<td><input type="text" name="uname" value="<?php echo $uname; ?>"><br>
						<font size="2" style="color: red"><?php echo $err_uname; ?></font>
					</td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" name="pass"><br>
						<font size="2" style="color: red"><?php echo $err_pass; ?></font>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="login" value="Log in"></td>
				</tr>
			</table>
		</form>
	</body>

</html>