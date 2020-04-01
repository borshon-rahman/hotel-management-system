<html>
	<title>Home</title>
	<head></head>
	<body>
		<?php
			$uname = "";
			$userStatus = "";
			if(isset($_POST['account']))
			{
				session_start();
				if(isset($_SESSION['loggedinuser']))
				{
					$uname = $_SESSION['loggedinuser'];
					$login = simplexml_load_file("data\login.xml");
					$user_name = "";
					$uStatus = "";
					for($i=0;$i<count($login->user);$i++)
					{
						$user_name = (String)$login->user[$i]->uname;
						$uStatus = (String)$login->user[$i]["status"];
						if($uname == $user_name)
						{
							if($uStatus == "admin")
							{
								header("Location:admin_dashboard.php");
							}
							elseif($uStatus == "manager")
							{
								header("Location:manager_dashboard.php");
							}
							elseif($uStatus == "stuff")
							{
								header("Location:employee_dashboard.php");
							}
						}
					}
				}
				elseif(!isset($_SESSION['loggedinuser']))
				{
					header("Location:login.php");
				}
			}
		?>

	<p>
		<form method="post" action="">
			<div style="background-color: rgb(11, 13, 71);">
		<table>
			<tr>
				<td><a href="home.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font></a>
				</td>
				<td valign="bottom"><a href="home.php"><font style="color: rgb(236,190,20);">Home</font></a></td>
				<td></td>
				<td valign="bottom"><a href="#about" class="menu_link scroll"><font style="color: rgb(236,190,20);">About</font></a></td>
				<td></td>
				<td valign="bottom"><a href="#gallery" class="menu_link scroll"><font style="color: rgb(236,190,20);">Gallery</font></a></td>
				<td></td>
				<td valign="bottom"><a href="#rooms" class="menu_link scroll"><font style="color: rgb(236,190,20);">Rooms</font></a></td>
				<td></td>
				<td valign="bottom"><a href="#contact" class="menu_link scroll"><font style="color: rgb(236,190,20);">Contact Us</font></a></td>
				<td></td>
				<td valign="bottom"><a href="login.php"><font style="color: rgb(236,190,20);">Login/Register</font></a></td>
				<td></td>
				<td valign="bottom"><div><input type="submit" name="account" value="Account" style="background-color: rgb(11,13,71); border: none; color: rgb(236,190,20); font-weight: bold;"></div></td>
			</tr>

		</table>
		</div>
		</form>
		
	</p>
		<hr>
		<div style="width: 100%; height: 550px; background-image: url('images/1.jpg');">
		</div>
		
		
			<a href="room_reserve.php"><div style="background-color: rgb(236,190,20);height: 150px; text-align: center;"><font size="15" style="color: white">Room Reservation</font></div></a>
		<div>
			<p style="text-align: center;"><span><font size="6" style="font-family: Californian FB;"><b>EXPERIENCE A GOOD STAY, ENJOY FANTASTIC<br> OFFERS</b></font></span><br> <span><font size="5" style="color: rgb(236,190,20); font-family: Californian FB;"><b>FIND OUR FRIENDLY WELCOMING RECEPTION</b></font></span></p>
		</div>
		
		<table align="center">
			<tr>
				<td><ul><li><b>MASTER BEDROOMS</b></li></ul></td>
				<td><ul><li><b>SEA VIEW BALCONY</b></li></ul></td>
				<td><ul><li><b>LARGE CAFE</b></li></ul></td>
				<td><ul><li><b>WIFI COVERAGE</b></li></ul></td>
			</tr>
		</table>
		<div style="background-color: rgb(235,243,255); width: 100%">
			<p style="text-align: center;" id="about">
				<h2 style="text-align: center; color: rgb(46,21,125);">About Our Sun Rise</h2>
				<p style="text-align: center;"><font style="font-family: Bahnschrift Light SemiCondensed;">Welcome to SUN RISE HOTEL where business and leisure blend together. Enjoying an unrivalled location, overlooking the Bay of Bengal (only 25 yards from the Bay water) and sitting in the laps of hills, we offer deluxe accommodation in 181 well appointed guest rooms and suites. The panoramic view of the ocean, the majestic hills and the natural beauty of the tamarisk trees are all wonderfully complemented by luxury facilities and Bangladeshi hospitality.</font></p>
				<p style="text-align: center;"><font style="font-family: Bahnschrift Light SemiCondensed;">On entering this charming hotel in Florence, you will immediately sense its special intimate atmosphere that makes you feel like being in your own florentine home.  Each detail has been passionately chosen and each room deserves a visit. Hotel Cellai style mixes valuable antiques and original artworks with an unexpected eclectic contemporary twist. The entire House recalls the ancient ‘Palazzi’  of times past where young European aristocrats lived while discovering the beauty and the artistic mysteries of Italy</font></p>
				<img src="images\about.jpg" alt="about" width="745" height="300" align="middle">
				<img src="images\a1.jpg" alt="about" width="745" height="300">
			</p><br>
		</div>
		
		<div style="width: 100%; height: 650px; background-image: url('images/services.jpg');">
			<p id="services" style="text-align: center; color: white">
			<font size="10">Our Services</font>
			<table align="center" border="1" width="650">
				<tr>
					<td style="text-align: center;"><h1 style="color: rgb(230,230,230);">Stay First, Pay After!</h1></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align: center;"><h1 style="color: rgb(230,230,230);">24 Hour Restaurant</h1></td>
				</tr>
				<tr>
					<td><ul><font size="4" style="color: rgb(230,230,230);"><li>Decorated room, Proper air conditiond</li></font></ul></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><ul><font size="4" style="color: rgb(230,230,230);"><li>24 hours room service</li></font></ul></td>
				</tr>
				<tr>
					<td><ul><font size="4" style="color: rgb(230,230,230);"><li>Private Balcony</li></font></ul></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><ul><font size="4" style="color: rgb(230,230,230);"><li>24-hour Conceirge service</li></font></ul></td>
				</tr>
			</table>
		</p>
		</div>
		<p id="gallery">
			<h1 style="text-align: center;">Our Gallery</h1>
			<img src="images\g1.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g2.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g3.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g4.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g5.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g6.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g7.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g8.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g9.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g10.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g11.jpg" alt="gallery" width="370px" height="250px">
			<img src="images\g12.jpg" alt="gallery" width="370px" height="250px">
		</p>
		<p id="rooms">
			<h1 style="text-align: center;">Rooms And Rates</h1>
				 <table align="center">
				 	<tr>
				 		<td>
				 			<img src="images\r1.jpg" width="" height=""><br>
				 			<span style="text-align: center;">Deluxe Room</span> &nbsp <span>$320</span> <a href="room_reserve.php">Book</a>
				 		</td>
				 		<td>
				 			<img src="images\r2.jpg" width="" height=""><br>
				 			<span style="text-align: center;">Luxury Room</span> &nbsp <span>$220</span> <a href="room_reserve.php">Book</a>
				 		</td>
				 		<td>
				 			<img src="images\r3.jpg" width="" height=""><br>
				 			<span style="text-align: center;">Guest House</span> &nbsp <span>$180</span> <a href="room_reserve.php">Book</a>
				 		</td>
				 		<td>
				 			<img src="images\r4.jpg" width="" height=""><br>
				 			<span style="text-align: center;">Single Room</span> &nbsp <span>$150</span> <a href="room_reserve.php">Book</a>
				 		</td>

				 	</tr>
				 </table>
		</p>
		<div style="background-image: url('images/contact.jpg'); width: 100%; height: 500px; text-align: center;">
			<p id="contact">
			<h1 style="color: white;">Connect With Us</h1>
			<span style="text-align: center;"><font size="5" style="color: white;">Cox's Bazaar</font></span>
			<table align="center">
				<tr>
					<td><font style="color: rgb(236,190,20);">Phone: </font></td>
					<td><font style="color: white;">+88 0341 62480 - 90</font></td>
				</tr>
				<tr>
					<td><font style="color: rgb(236,190,20);">Email: </font></td>
					<td><font style="color: white;">INFO@SUNRISE.COM</font></td>
				</tr>
				<tr>
					<td><font style="color: rgb(236,190,20);">Address: </font></td>
					<td><font style="color: white;">Hotel Motel Zone, Cox's Bazar Sea Beach, Cox’s Bazar</font></td>
				</tr>
			</table>
		</p>
		</div>
	</body>
</html>
