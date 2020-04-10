<?php
	$user = "";
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	else
	{
		$user = $_SESSION['loggedinuser'];
	}
?>
<?php
	require "db_connect.php";
	$name = "";
	$err_name = "";
	$uname = "";
	$err_uname = "";
	$pass = "";
	$err_pass = "";
	$err = "";
	if(isset($_POST['insert']))
	{
		if(empty($_POST['name']))
		{
			$err_name = "Name required.";
		}
		else
		{
			$name = htmlspecialchars($_POST['name']);
		}
		if(empty($_POST['uname']))
		{
			$err_uname = "Username Required";
		}
		else
		{
			$uname = htmlspecialchars($_POST['uname']);
		}
		if(empty($_POST['pass']))
		{
			$err_pass = "Password required";
		}
		else
		{
			$pass = $_POST['pass'];

			$query = "INSERT INTO users (name, user_name, password) VALUES ('$name','$uname','$pass')";
			if(insert($query))
			{
				$err = "Insert successful!";
			}
			else
			{
				$err = "Not inserted.";
			}
		}
	}
?>
<html>
	<title></title>
	<head></head>
	<body>
		<p>Welcome <?php echo $user; ?></p>
		<div>
			<h1 style="text-align: center;">Add User</h1>
			<div>
				<h3 align="center"><?php echo $err; ?></h3>
			</div>
			<form method="post" action="">
				<table align="center">
					<tr>
						<td><b>Name : </b></td>
						<td><input type="text" name="name"><br>
							<font size="2" style="color: red"><?php echo $err_name; ?></font>
						</td>
					</tr>
					<tr>
						<td><b>Username: </b></td>
						<td><input type="text" name="uname"><br>
							<font size="2" style="color: red"><?php echo $err_uname; ?></font>
						</td>
					</tr>
					<tr>
						<td><b>Password: </b></td>
						<td><input type="password" name="pass"><br>
							<font size="2" style="color: red"><?php echo $err_pass; ?></font>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="insert" value="Add User"></td>
					</tr>
				</table>
			</form>
		</div>
		<div>
			<h2 align="center">Users</h2>
			<?php
			$query = "SELECT * FROM users";
			$users = execute($query);
			if(mysqli_num_rows($users) > 0)
			{
				echo "<table align='center' border='1' style='border-collapse: collapse;'>";
				echo "<tr>";
				echo "<th>"."Name"."</th>";
				echo "<th>"."Username"."</th>";
				echo "<th>"."Password"."</th>";
				echo "</tr>";

				while($rows = mysqli_fetch_assoc($users))
				{
					echo "<tr>";
					echo "<td>".$rows["name"]."</td>";
					echo "<td>".$rows["user_name"]."</td>";
					echo "<td>".$rows["password"]."</td";
					echo "</tr>";
				}
				echo "</table>";
			}
			?>
		</div>
	</body>
</html>