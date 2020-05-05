<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>
<html>
	<title>Room Reservation</title>
	<head>
		<script>
			
		</script>
	</head>
	<body>
		<center>
			<div style="background-color: gray; background-image: url(../storage/images/image.png);">
				<span><font id="msg" size="4" style="color: yellow;"></font></span>
				<table>
					<tr>
						<td><span style="color: rgb(11,13,71);"><font size="5"><b>PERSONAL INFORMATION</b></font><br><hr></span></td>
					</tr>
					<tr>
						<td>
							<font>First Name </font><font style="color: red">*</font><br>
							<input id="fname" type="text" name="fname" value=""> <font id="err_fname" size="2" style="color: red"></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Last Name </font><font style="color: red">*</font><br>
							<input id="lname" type="text" name="lname" value=""> <font id="err_lname" size="2" style="color: red"></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Email </font><font style="color: red">*</font><br>
							<input id="email" type="text" name="email" value=""> <font id="err_email" size="2" style="color: red"></font>
						</td>
					</tr>
					<tr>
						<td>
							<font>Country </font><font style="color: red">*</font><br>
							<select id="country" name="country">
								<option>Bangladesh</option>
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
							<input id="phone" type="text" name="phone"> <font id="err_phone" size="2" style="color: red"></font>
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
							<select id="room_type" name="room_type">
								<option>Superior Room</option>
								<option>Delux Room</option>
								<option>Guest House</option>
								<option>Single Room</option>
							</select><br>
						</td>
					</tr>
					<tr>
						<td>
							<font>Available Room Number </font>
							<?php
							require "../models/db_connect.php";
							$query = "SELECT room_number FROM room WHERE status='available'";
							$results = get($query);
							$count = mysqli_num_rows($results);
							?>
							<select id="room_number" name="room_number">
							<?php 
							foreach($results as $result)
							{
								echo "<option>".$result["room_number"][$i]."</option>";
							}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<font>Bedding Type </font><br>
							<select id="bedding_type" name="bedding_type">
								<option>Single</option>
								<option>Double</option>
								<option>Triple</option>
								<option>Quad</option>
							</select><br>
						</td>
					</tr>
					
					<tr>
						<td>
							<font>Meal Plan</font><br>
							<select id="meal_plan" name="meal_plan">
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
							<font>Date </font><select id="checkin_date" name="checkin_date">
								<?php 
									for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
								?>
								
							</select> 
							<font>Month </font><select id="checkin_month" name="checkin_month">
								<?php $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); 
									$months_length = count($months);
									for($i=0;$i<=$months_length;$i++)
									{
										echo "<option>$months[$i]</option>";
									}
								?>
							</select> 
							<font>Year </font><select id="checkin_year" name="checkin_year">
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
							<font>Date </font><select id="checkout_date" name="checkout_date">
								<?php 
									for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
								?>
								
							</select> 
							<font>Month </font><select id="checkout_month" name="checkout_month">
								<?php $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"); 
									$months_length = count($months);
									for($i=0;$i<=$months_length;$i++)
									{
										echo "<option>$months[$i]</option>";
									}
								?>
							</select> 
							<font>Year </font><select id="checkout_year" name="checkout_year">
								<?php for($i=2015;$i<=2050;$i++)
								{
									echo "<option>$i</option>";
								}

								 ?>
							</select><br>
						</td>
					</tr>
				</table>
				<br>
				<button onclick="roomReserve()">Submit</button>
			</div>
		</center>
	</body>
</html>