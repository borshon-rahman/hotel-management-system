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
	<title>Room Reservation</title>
	<head></head>
	<body>
		<?php
			require "../models/db_connect.php";
			$fname = "";
			$err_fname = "";
			$lname = "";
			$err_lname = "";
			$email = "";
			$err_email ="";
			$phone = "";
			$err_phone = "";
			$country = "";
			$room_type = "";
			$available_room = "";
			$bedding_type = "";
			$room_count = "";
			$err_room_count = "";
			$meal_plan = "";
			$checkin_date = "";
			$checkin_month = "";
			$checkin_year = "";
			$checkout_date = "";
			$checkout_month = "";
			$checkout_year = "";
			$msg = "";

			if(isset($_POST['submit']))
			{
				if(empty($_POST['fname']))
				{
					$err_fname = "First Name Required";
				}
				else
				{
					$fname = htmlspecialchars($_POST['fname']);
				}
				if(empty($_POST['lname']))
				{
					$err_lname = "Last Name Required";
				}
				else
				{
					$lname = htmlspecialchars($_POST['lname']);
				}
				if(empty($_POST['room_count']))
				{
					$err_room_count = "Enter number of room";
				}
				else
				{
					$room_count = $_POST['room_count'];
				}
				if(empty($_POST['phone']))
				{
					$err_phone = "Phone Number Required";
				}
				else
				{
					$phone = htmlspecialchars($_POST['phone']);
				}
				if(empty($_POST['email']))
				{
					$err_email = "Email is required";
				}
				else
				{
					$email = htmlspecialchars($_POST['email']);
					
					$country = $_POST['country'];
					$room_type = $_POST['room_type'];
					$available_room = $_POST['available_room'];
					$bedding_type = $_POST['bedding_type'];
					$meal_plan = $_POST['meal_plan'];
					$checkin_date = $_POST['checkin_date'];
					$checkin_month = $_POST['checkin_month'];
					$checkin_year = $_POST['checkin_year'];
					$checkout_date = $_POST['checkout_date'];
					$checkout_month = $_POST['checkout_month'];
					$checkout_year = $_POST['checkout_year'];

					$query = "INSERT INTO reserved_room VALUES ('$available_room', '$room_type', '$fname', '$lname', '$email', '$country', '$phone', '$bedding_type', '$room_count', '$meal_plan', '$checkin_date', '$checkin_month', '$checkin_year', '$checkout_date', '$checkout_month', '$checkout_year')";
					execute($query);
					$fname = "";
					$lname = "";
					$email = "";
					$phone = "";
					$country = "";
					$room_type = "";
					$available_room = "";
					$bedding_type = "";
					$room_count = "";
					$meal_plan = "";
					$checkin_date = "";
					$checkin_month = "";
					$checkin_year = "";
					$checkout_date = "";
					$checkout_month = "";
					$checkout_year = "";
					$msg = "Reservation Succesfull!";
				}
				
			}

		?>
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
			<span style="text-align: left;">
				&nbsp <a href="../index.php" style="text-decoration: none;"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					&nbsp <font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			<div style="text-align: center;">
				<font size="8" style="color: white;">Room Reservation</font>
				<div style="text-align: right;"><input type="submit" name="logout" value="Log out" style="background-color: rgb(11, 13, 71); color: gray;">
				</div>
			</div>
		</form>
		<hr>
		<center>
			<form method="post" action="" style="background-color: gray; background-image: url(../storage/images/image.png);">
				<span><font size="4" style="color: yellow;"><?php echo "$msg"; ?></font></span>
				<table>
					<tr>
						<td><span style="color: rgb(11,13,71);"><font size="5"><b>PERSONAL INFORMATION</b></font><br><hr></span></td>
					</tr>
					<tr>
						<td>
							<font>First Name </font><font style="color: red">*</font><br>
							<input type="text" name="fname" value="<?php echo $fname; ?>"> <font size="2" style="color: red"><?php echo "$err_fname"; ?></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Last Name </font><font style="color: red">*</font><br>
							<input type="text" name="lname" value="<?php echo $lname; ?>"> <font size="2" style="color: red"><?php echo "$err_lname"; ?></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Email </font><font style="color: red">*</font><br>
							<input type="text" name="email" value="<?php echo $email; ?>"> <font size="2" style="color: red"><?php echo "$err_email"; ?></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Country </font><font style="color: red">*</font><br>
							<select name="country">
								<option value="<?php echo $country; ?>">Bangladesh</option>
								<option>India</option>
								<option>China</option>
								<option>America</option>
								<option>Thiland</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<font>Phone Number </font><font style="color: red">*</font><br>
							<input type="text" name="phone"> <font size="2" style="color: red"><?php echo "$err_phone" ?></font>
						</td>
					</tr>
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td><b style="color: rgb(11,13,71);">RESERVATION INFORMATION</b><br><hr></td>
					</tr>
					<tr>
						<td>
							<font>Type of Room </font><font style="color: red">*</font><br>
							<select name="room_type">
								<option>Superior Room</option>
								<option>Delux Room</option>
								<option>Guest House</option>
								<option>Single Room</option>
							</select><br>
						</td>
					</tr>
					<tr>
						<td>
							<font>Available Room</font><font style="color: red">*</font><br>
							<font>Room Number </font><select name="available_room">
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<font>Bedding Type </font><br>
							<select name="bedding_type">
								<option>Single</option>
								<option>Double</option>
								<option>Triple</option>
								<option>Quad</option>
							</select><br>
						</td>
					</tr>
					<tr>
						<td><font>Number of Room </font><font style="color: red">*</font><br>
							<input type="Number" name="room_count"> <font size="2" style="color: red"><?php echo "$err_room_count"; ?></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Meal Plan</font><br>
							<select name="meal_plan">
								<option>Room Only</option>
								<option>Breakfast</option>
								<option>Half Board</option>
								<option>Full Board</option>
							</select><br>
						</td>
					</tr>
					<tr>
						<td>
							<font>Check in </font><br>
							<font>Date </font><select name="checkin_date">
								<?php 
									for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
								?>
								
							</select> 
							<font>Month </font><select name="checkin_month">
								<?php $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); 
									$months_length = count($months);
									for($i=0;$i<=$months_length;$i++)
									{
										echo "<option>$months[$i]</option>";
									}
								?>
							</select> 
							<font>Year </font><select name="checkin_year">
								<?php for($i=2015;$i<=2050;$i++)
								{
									echo "<option>$i</option>";
								}

								 ?>
							</select><br>
						</td>
					</tr>
					<tr>
						<td>
							<font>Check out </font><br>
							<font>Date </font><select name="checkout_date">
								<?php 
									for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
								?>
								
							</select> 
							<font>Month </font><select name="checkout_month">
								<?php $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); 
									$months_length = count($months);
									for($i=0;$i<=$months_length;$i++)
									{
										echo "<option>$months[$i]</option>";
									}
								?>
							</select> 
							<font>Year </font><select name="checkout_year">
								<?php for($i=2015;$i<=2050;$i++)
								{
									echo "<option>$i</option>";
								}

								 ?>
							</select><br>
						</td>
					</tr>
				</table>
				<br><input type="submit" name="submit" value="Submit">
			</form>
		</center>
		
	</body>
</html>