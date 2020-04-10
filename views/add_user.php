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
	<body style="background-color: rgb(34,139,34); background-image: url(../storage/images/add_user.jpg); background-blend-mode: lighten;">
		<?php
		$fname = "";
		$err_fname = "";
		$lname = "";
		$err_lname = "";
		$gender = "";
		$err_gender = "";
		$adrs1 = "";
		$err_adrs1 = "";
		$adrs2 = "";
		$err_adrs2 = "";
		$city = "";
		$err_city = "";
		$zip = "";
		$err_zip = "";
		$country = "";
		$err_country = "";
		$phone = "";
		$email = "";
		$err_email = "";
		$uname = "";
		$err_uname = "";
		$pass = "";
		$err_pass = "";
		$cpass = "";
		$err_cpass = "";
		$status = "";
		$err_status = "";
		$msg = "";
		if(isset($_POST['submit']))
		{
			if(empty($_POST['fname']))
			{
				$err_fname = "First Name is required";
			}
			else
			{
				$fname = htmlspecialchars($_POST['fname']);
			}
			if(empty($_POST['lname']))
			{
				$err_lname = "Last Name is required";
			}
			else
			{
				$lname = htmlspecialchars($_POST['lname']);
			}
			if(!isset($_POST['gender']))
			{
				$err_gender = "Gender Required";
			}
			else
			{
				$gender = $_POST['gender'];
			}
			if(empty($_POST['adrs1']))
			{
				$err_adrs1 = "Permanent Address Required";
			}
			else
			{
				$adrs1 = htmlspecialchars($_POST['adrs1']);
			}
			if(empty($_POST['adrs2']))
			{
				$err_adrs2 = "Present Address Required";
			}
			else
			{
				$adrs2 = htmlspecialchars($_POST['adrs2']);
			}
			if(empty($_POST['city']))
			{
				$err_city = "City is required";
			}
			else
			{
				$city = htmlspecialchars($_POST['city']);
			}
			if(empty($_POST['zip']))
			{
				$err_zip = "Zip Code is required";
			}
			else
			{
				$zip = htmlspecialchars($_POST['zip']);
			}
			if(empty($_POST['country']))
			{
				$err_country = "Country is required";

			}
			else
			{
				$country = htmlspecialchars($_POST['country']);
			}
			$phone = htmlspecialchars($_POST['phone']);
			if(empty($_POST['email']))
			{
				$err_email = "Email is required";

			}
			else
			{
				$email = htmlspecialchars($_POST['email']);
			}
			if(empty($_POST['uname']))
			{
				$err_uname = "Username is required";
			}
			else
			{
				$uname = htmlspecialchars($_POST['uname']);
			}
			if(empty($_POST['status']))
			{
				$err_status = "Status required";
			}
			else
			{
				$status = htmlspecialchars($_POST['status']);
			}
			if(empty($_POST['pass']))
			{
				$err_pass = "Password is required";
			}
			else
			{
				if($_POST['cpass'] == $_POST['pass'])
				{
					$pass = $_POST['pass'];
					$xml = new DOMDocument();
					$xml->load("../data/user.xml");
					$rootTag = $xml->getElementsByTagName("user_info")->item(0);
					$userTag = $xml->createElement("user");
					$userTag->setAttribute("status", "$status");
						$fnameTag = $xml->createElement("fname", $fname);
						$lnameTag = $xml->createElement("lname", $lname);
						$genderTag = $xml->createElement("gender", $gender);
						$address1Tag = $xml->createElement("address1", $adrs1);
						$address2Tag = $xml->createElement("address2", $adrs2);
						$cityTag = $xml->createElement("city", $city);
						$zipTag = $xml->createElement("zip", $zip);
						$countryTag = $xml->createElement("country", $country);
						$phoneTag = $xml->createElement("phone", $phone);
						$emailTag = $xml->createElement("email", $email);
							$userTag->appendChild($fnameTag);
							$userTag->appendChild($lnameTag);
							$userTag->appendChild($genderTag);
							$userTag->appendChild($address1Tag);
							$userTag->appendChild($address2Tag);
							$userTag->appendChild($cityTag);
							$userTag->appendChild($zipTag);
							$userTag->appendChild($countryTag);
							$userTag->appendChild($phoneTag);
							$userTag->appendChild($emailTag);
					$rootTag->appendChild($userTag);
					$xml->save("../data/user.xml");

					$xml = new DOMDocument();
					$xml->load("../data/login.xml");
					$rootTag = $xml->getElementsByTagName("user_data")->item(0);
					$userTag = $xml->createElement("user");
					$userTag->setAttribute("status", "$status");
						$unameTag = $xml->createElement("uname", $uname);
						$passTag = $xml->createElement("pass", $pass);
							$userTag->appendChild($unameTag);
							$userTag->appendChild($passTag);
					$rootTag->appendChild($userTag);
					$xml->save("../data/login.xml");

					$fname = "";
					$err_fname = "";
					$lname = "";
					$err_lname = "";
					$gender = "";
					$err_gender = "";
					$adrs1 = "";
					$err_adrs1 = "";
					$adrs2 = "";
					$err_adrs2 = "";
					$city = "";
					$err_city = "";
					$zip = "";
					$err_zip = "";
					$country = "";
					$err_country = "";
					$phone = "";
					$email = "";
					$err_email = "";
					$uname = "";
					$err_uname = "";
					$pass = "";
					$err_pass = "";
					$cpass = "";
					$err_cpass = "";
					$status = "";
					$err_status = "";
					$msg = "User Succesfully Registered!";
				}
				else
				{
					$err_cpass = "Password does not matched";
				}
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
				<font size="8" style="color: white;">User Registration</font>
				<div style="text-align: right;"><input type="submit" name="logout" value="Log out" style="background-color: rgb(11, 13, 71); color: gray;">
				</div>
			</div>
		</form>
	<form method="post" action="">
		<center>
			<font size="4" style="color: blue;"><?php echo "$msg"; ?></font>
			<h3>Personal Information</h3>
			<table>
				<tr>
					<td><b><font size="2" style="color: red">*</font>First Name: </b></td>
					<td><input type="text" name="fname" value="<?php echo "$fname"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_fname"; ?></font>
				</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Last Name: </b></td>
					<td><input type="text" name="lname" value="<?php echo "$lname"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_lname"; ?></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Gender </b></td>
					<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female <br>
						<font size="2" style="color: red"><?php echo "$err_gender"; ?></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Permanent Address: </b></td>
					<td><input type="text" name="adrs1" value="<?php echo "$adrs1"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_adrs1"; ?></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Present Address: </b></td>
					<td><input type="address" name="adrs2" value="<?php echo "$adrs2"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_adrs2"; ?></font>
					</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>City: </b></td>
					<td><input type="text" name="city" value="<?php echo "$city"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_city"; ?></font>
					</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Zip Code </b></td>
					<td><input type="text" name="zip" value="<?php echo "$zip"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_zip"; ?></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Country </b></td>
					<td><input type="text" name="country" value="<?php echo "$country"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_country"; ?></font></td>
				</tr>
				<tr>
					<td><b>Phone </b></td>
					<td><input type="text" name="phone" value="<?php echo "$phone"; ?>"></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Email</b></td>
					<td><input type="text" name="email" value="<?php echo "$email"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_email"; ?></font></td>
				</tr>
			</table>
		</center>
		<center>
			<h3>Account Information</h3>
			<table>
				<tr>
					<td><b>Username: </b></td>
					<td><input type="text" name="uname" value="<?php echo "$uname"; ?>"><br>
						<font size="2" style="color: red"><?php echo "$err_uname"; ?></font></td>
				</tr>
				<tr>
					<td><b>Status: </b></td>
					<td><input type="text" name="status"><br>
						<font size="2" style="color: red"><?php echo "$err_status"; ?></font></td>
				</tr>
				<tr>
					<td><b>Password </b></td>
					<td><input type="password" name="pass"><br>
						<font size="2" style="color: red"><?php echo "$err_pass"; ?></font></td>
				</tr>
				<tr>
					<td><b>Confirm Password </b></td>
					<td><input type="password" name="cpass"><br>
						<font size="2" style="color: red"><?php echo "$err_cpass"; ?></font></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="Submit" style="background-color: blue; font-weight: bold;">
		</center>
	</form>
	</body>
</html>