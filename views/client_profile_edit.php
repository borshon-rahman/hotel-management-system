<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	$uname = $_SESSION['loggedinuser'];
?>
<html>
	<title></title>
	<head>
		<script src="scripts/client_profile_edit_scripts.js"></script>
	</head>
	<body>
		<?php
			require "../models/db_connect.php";
			
			$fname = "";
			$err_fname = "";
			$lname = "";
			$err_lname = "";
			$gender = "";
			$err_gender = "";
			$p_address = "";
			$err_p_address = "";
			$pre_address = "";
			$err_pre_address = "";
			$city = "";
			$err_city = "";
			$zip = "";
			$err_zip = "";
			$country = "";
			$err_country = "";
			$phone = "";
			$err_phone = "";
			$email = "";
			$err_email = "";
			$msg = "";

			$query = "SELECT fname,lname,permanent_adrs,present_adrs,city,zip_code,country,phone,email FROM users WHERE user_name='$uname'";
			$results = get($query);
			foreach($results as $result)
			{
				$fname = $result["fname"];
				$lname = $result["lname"];
				$p_address = $result["permanent_adrs"];
				$pre_address = $result["present_adrs"];
				$city = $result["city"];
				$zip = $result["zip_code"];
				$country = $result["country"];
				$phone = $result["phone"];
				$email = $result["email"];
			}
			
			if(isset($_POST['save']))
			{
				$fname = htmlspecialchars($_POST['fname']);
				$lname = htmlspecialchars($_POST['lname']);
				$gender = $_POST['gender'];
				$p_address = htmlspecialchars($_POST['adrs1']);
				$pre_address = htmlspecialchars($_POST['adrs2']);
				$city = htmlspecialchars($_POST['city']);
				$zip = htmlspecialchars($_POST['zip']);
				$country = htmlspecialchars($_POST['country']);
				$phone = htmlspecialchars($_POST['phone']);
				$email = htmlspecialchars($_POST['email']);

				$query = "UPDATE `users` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`permanent_adrs`='$p_address',`present_adrs`='$pre_address',`city`='$city',`zip_code`='$zip',`country`='$country',`phone`='$phone',`email`='$email' WHERE user_name='$uname'";
				$result= del_execute($query);
				if($result > 0)
				{
					$msg = "Profile Updated!";
				}
				else
				{
					$msg = "Error.";
				}
			}
		?>
		<div style="background-color: rgb(11, 13, 71);">
		<table>
			<tr>
				<td><a href="../index.php" style="text-decoration: none;"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font></a>
				</td>
				<td valign="bottom"><a href="../index.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Home</font></a></td>
				<td></td>
				<td valign="bottom"><a href="client_dashboard.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Profile</font></a></td>
				<td></td>
				<td valign="bottom"><a href="../controller/logout.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);"><b>Logout</b></font></a></td>
			</tr>
		</table>
		</div>
	<div style="background-color: rgb(34,139,34); background-image: url(../storage/images/add_user.jpg); background-blend-mode: lighten; height: 100%; width: 100%">
		<br><br><br><br><br><br>
		<form method="post" action="">
		<center>
			<font id="msg" name="msg" size="4" style="color: blue;"><?php echo $msg; ?></font>
			<h3>Personal Information</h3>
			<table>
				<tr>
					<td><b>First Name: </b></td>
					<td><input id="fname" type="text" name="fname" value="<?php echo $fname; ?>"><br>
						<font id="err_fname" size="2" style="color: red"></font>
				</td>
				</tr>
				<tr>
					<td><b>Last Name: </b></td>
					<td><input id="lname" type="text" name="lname" value="<?php echo $lname; ?>"><br>
						<font id="err_lname" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Gender </b></td>
					<td><input id="gender" type="radio" name="gender" value="Male"> Male <input id="gender" type="radio" name="gender" value="Female"> Female <br>
						<font id="err_gender" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Permanent Address: </b></td>
					<td><input type="text" name="adrs1" value="<?php echo $p_address; ?>"><br>
						<font size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Present Address: </b></td>
					<td><input id="adrs2" type="address" name="adrs2" value="<?php echo $pre_address; ?>"><br>
						<font id="err_pre_address" size="2" style="color: red"></font>
					</td>
				</tr>
				<tr>
					<td><b>City: </b></td>
					<td><input id="city" type="text" name="city" value="<?php echo $city; ?>"><br>
						<font id="err_city" size="2" style="color: red"></font>
					</td>
				</tr>
				<tr>
					<td><b>Zip Code </b></td>
					<td><input id="zip" type="text" name="zip" value="<?php echo $zip; ?>"><br>
						<font id="err_zip" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Country </b></td>
					<td><input id="country" type="text" name="country" value="<?php echo $country; ?>"><br>
						<font id="err_country" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Phone </b></td>
					<td><input id="phone" type="text" name="phone" value="<?php echo $phone; ?>"><br>
						<font id="err_phone" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td><input id="email" type="text" name="email" value="<?php echo $email; ?>"><br>
						<font id="err_email" size="2" style="color: red"></font></td>
				</tr>
			</table>
		</center><br>
		<center>
			<input type="submit" name="save" value="Save" style="background-color: blue; font-weight: bold;">
		</center><br>
		</form>
	</div>
	</body>
</html>