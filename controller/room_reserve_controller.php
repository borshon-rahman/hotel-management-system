<?php
		require "../models/db_connect.php";
			$fname = "";
			$lname = "";
			$email = "";
			$phone = "";
			$country = "";
			$room_type = "";
			$bedding_type = "";
			$meal_plan = "";
			$checkin_date = "";
			$checkin_month = "";
			$checkin_year = "";
			$checkout_date = "";
			$checkout_month = "";
			$checkout_year = "";
			

			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$email = $_GET['email'];
			$phone = $_GET['phone'];
			$country = $_GET['country'];
			$room_type = $_GET['room_type'];
			$room_number = $_GET['room_number'];
			$bedding_type = $_GET['bedding_type'];
			$meal_plan = $_GET['meal_plan'];
			$cid = $_GET['cid'];
			$cim = $_GET['cim'];
			$ciy = $_GET['ciy'];
			$cod = $_GET['cod'];
			$com = $_GET['com'];
			$coy = $_GET['coy'];
			
			
			$fname = htmlspecialchars($fname);
			$lname = htmlspecialchars($lname);
			$email = htmlspecialchars($email);
			$phone = htmlspecialchars($phone);
			$country = htmlspecialchars($country);
			$uname = htmlspecialchars($uname);

			$query1 = "INSERT INTO reserved_room VALUES ('$room_number','$room_type','$fname','$lname','$email','$country','$phone','$bedding_type','$meal_plan','$cid','$cim','$ciy','$cod','$com',$coy)";
			execute($query1);
			$query2 = "UPDATE room SET status='availablee' WHERE room_number= '2'";
			execute($query2);
			echo "done";
?>