<html>
	<title>Login</title>
	<head></head>
	<body style="background-image: url(../storage/images/login.jpg);">
		<?php
		$uname = "";
		$err_uname = "";
		$pass = "";
		$err_pass = "";
		if(isset($_POST['login']))
		{
			$uname = htmlspecialchars($_POST['uname']);
			$pass = $_POST['pass'];
			if(empty($uname) && empty($pass))
			{
				$err_uname = "Username is Required";
				$err_pass = "Password is Required";
			}
			elseif(empty($uname))
			{
				$err_uname = "Username is Required";
			}
			elseif(empty($pass))
			{
				$err_pass = "Password is Required";
			}
			else
			{
				$login = simplexml_load_file("../data/login.xml");
				$user_name = "";
				$password = "";
				$userStatus = "";
				for($i=0;$i<count($login->user);$i++)
				{
					$user_name = (String)$login->user[$i]->uname;
					$password = (String)$login->user[$i]->pass;
					$userStatus = (String)$login->user[$i]["status"];
					if($user_name == $uname && $password == $pass)
					{
						if($userStatus == "admin")
						{
							session_start();
							$_SESSION["loggedinuser"]= $uname;
							
							header("Location:admin_dashboard.php");
						}
						elseif($userStatus == "manager")
						{
							session_start();
							$_SESSION["loggedinuser"]= $uname;
							
							header("Location:manager_dashboard.php");
						}
						elseif($userStatus == "stuff")
						{
							session_start();
							$_SESSION["loggedinuser"]= $uname;
							
							header("Location:employee_dashboard.php");
						}
						elseif($userStatus == "client")
						{
							session_start();
							$_SESSION["loggedinuser"]= $uname;
							
							header("Location:room_reserve.php");
						}
					}
					else if($user_name !== $uname && $password == $pass)
					{
						$err_uname = "Enter Userid Correctly";
					}
					else if($user_name == $uname && $password !== $pass)
					{
						$err_pass = "Wrong password entered";
					}
					else if($user_name !== $uname && $password !== $pass)
					{
						$err_uname = "Enter Userid Correctly";
						$err_pass = "Wrong password entered";
					}
				}
			}	
		}
		?>

		<div style="text-align: center; background-color: rgb(11, 13, 71);">
				<a href="../index.php"><font size="8" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="8" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="4" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
		</div>
		<hr>
		<center>
			<h1 style="color: rgb(236,190,20);">Log in</h1>
			<form method="post" action="">
				<table style="background-color: gray;">
						<td>Username: </td>
						<td><input type="text" name="uname"> <font size="2" style="color: red"><?php echo "$err_uname"; ?></font>
						</td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="pass"> <font size="2" style="color: red"><?php echo "$err_pass"; ?></font>
						</td>
					</tr>
				</table><br>
				<input type="submit" name="login" value="Log In">
			</form>
			<i><b><font size="3">Don't have any account? Click here </font></b></i><a href="client_reg.php"><font style="color: blue;">register.</font></a>
		</center>
	</body>
</html>