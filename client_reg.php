<html>
	<title>User Registration</title>
	<head></head>
	<?php
		$uname = "";
		$err_uname = "";
		$pass = "";
		$err_pass = "";
		$err_cpass = "";
		$status = "client";
		$msg = "";
		if(isset($_POST['signup']))
		{
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
				$err_pass = "Please Enter Password";
			}
			else
			{
				if($_POST['pass'] == $_POST['cpass'])
				{
					$pass = $_POST['pass'];
					$xml = new DOMDocument();
					$xml->load("data\login.xml");
					$rootTag = $xml->getElementsByTagName("user_data")->item(0);
					$userTag = $xml->createElement("user");
					$userTag->setAttribute("status", "$status");
						$unameTag = $xml->createElement("uname", $uname);
						$passTag = $xml->createElement("pass", $pass);
							$userTag->appendChild($unameTag);
							$userTag->appendChild($passTag);
					$rootTag->appendChild($userTag);
					$xml->save("data\login.xml");

					$msg = "Registration Succesfull!";
				}
				else
				{
					$err_cpass = "Password did not match";
				}
			}
		}
	?>
	<body style="background-color: gray; background-image: url(images/image.png);">
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
			<span style="text-align: left;">
				&nbsp <a href="home.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					&nbsp <font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			<div style="text-align: center;">
				<font size="8" style="color: white;">Registration</font>
			</div>
		</form>
		<hr>
		<center><span><font size="4" style="color: blue; text-align: center;"><?php echo "$msg"; ?></font></span></center>
		<center>
			<form method="post" action="">
				<table>
					<tr>
						<td>Username/Email </td>
						<td><input type="text" name="uname"><br>
							<font size="2" style="color: red"><?php echo "$err_uname"; ?></font>
						</td>
					</tr>
					<tr>
						<td>Password </td>
						<td><input type="password" name="pass"><br>
							<font size="2" style="color: red"><?php echo "$err_pass" ?></font>
						</td>
					</tr>
					<tr>
						<td>Confirm Password </td>
						<td><input type="password" name="cpass"><br>
							<font size="2" style="color: red"><?php echo "$err_cpass" ?></font>
						</td>
					</tr>
				</table>
				<br><input type="submit" name="signup" value="Sign up">
			</form>
		</center>
	</body>
</html>