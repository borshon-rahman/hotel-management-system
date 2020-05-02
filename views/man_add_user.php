<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>
<html>
	<title></title>
	<head>
		<script></script>
	</head>
	<body>
	<div style="background-color: rgb(34,139,34); background-image: url(../storage/images/add_user.jpg); background-blend-mode: lighten;">
		<center>
			<font id="msg" size="4" style="color: blue;"></font>
			<h3>Personal Information</h3>
			<table>
				<tr>
					<td><b><font size="2" style="color: red">*</font>First Name: </b></td>
					<td><input id="fname" type="text" name="fname"><br>
						<font id="err_fname" size="2" style="color: red"></font>
				</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Last Name: </b></td>
					<td><input id="lname" type="text" name="lname" value=""><br>
						<font id="err_lname" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Gender </b></td>
					<td><input id="gender" type="radio" name="gender" value="Male"> Male <input id="gender" type="radio" name="gender" value="Female"> Female <br>
						<font id="err_gender" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Permanent Address: </b></td>
					<td><input id="adrs1" type="text" name="adrs1" value=""><br>
						<font id="err_p_address" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Present Address: </b></td>
					<td><input id="adrs2" type="address" name="adrs2" value=""><br>
						<font id="err_pre_address" size="2" style="color: red"></font>
					</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>City: </b></td>
					<td><input id="city" type="text" name="city" value=""><br>
						<font id="err_city" size="2" style="color: red"></font>
					</td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Zip Code </b></td>
					<td><input id="zip" type="text" name="zip" value=""><br>
						<font id="err_zip" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Country </b></td>
					<td><input id="country" type="text" name="country" value=""><br>
						<font id="err_country" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Phone </b></td>
					<td><input id="phone" type="text" name="phone" value=""><br>
						<font id="err_phone" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b><font size="2" style="color: red">*</font>Email</b></td>
					<td><input id="email" type="text" name="email" value=""><br>
						<font id="err_email" size="2" style="color: red"></font></td>
				</tr>
			</table>
		</center>
		<center>
			<h3>Account Information</h3>
			<table>
				<tr>
					<td><b>Username: </b></td>
					<td><input id="uname" type="text" name="uname" value=""><br>
						<font id="err_uname" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Status: </b></td>
					<td><select id="status" name="status"><option>stuff</option></select></td>
				</tr>
				<tr>
					<td><b>Password </b></td>
					<td><input id="pass" type="password" name="pass"><br>
						<font id="err_pass" size="2" style="color: red"></font></td>
				</tr>
				<tr>
					<td><b>Confirm Password </b></td>
					<td><input id="cpass" type="password" name="cpass"><br>
						<font id="err_cpass" size="2" style="color: red"></font></td>
				</tr>
			</table>
			<br>
			<button onclick="user_add()" style="background-color: blue; font-weight: bold;">Submit</button>
		</center>
	</div>
	</body>
</html>