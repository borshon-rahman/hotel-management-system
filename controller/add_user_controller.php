<?php
		require "../models/db_connect.php";
			$fname = "";
			$lname = "";
			$adrs1 = "";
			$adrs2 ="";
			$city = "";
			$zip = "";
			$country = "";
			$phone = "";
			$email = "";
			$uname = "";
			$status = "";
			$pass = "";

			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$gender = $_GET['gender'];
			$adrs1 = $_GET['p_address'];
			$adrs2 = $_GET['pre_address'];
			$city = $_GET['city'];
			$zip = $_GET['zip'];
			$country = $_GET['country'];
			$phone = $_GET['phone'];
			$email = $_GET['email'];
			$uname = $_GET['uname'];
			$status = $_GET['status'];
			$pass = $_GET['pass'];
			
			

			$fname = htmlspecialchars($fname);
			$lname = htmlspecialchars($lname);
			$adrs1 = htmlspecialchars($adrs1);
			$adrs2 = htmlspecialchars($adrs2);
			$city = htmlspecialchars($city);
			$zip = htmlspecialchars($zip);
			$country = htmlspecialchars($country);
			$phone = htmlspecialchars($phone);
			$email = htmlspecialchars($email);
			$uname = htmlspecialchars($uname);
			$status = htmlspecialchars($status);

			$pass = md5($pass);
			$query1 = "INSERT INTO login(user_name, password, status) VALUES ('$uname','$pass','$status')";
			execute($query1);
			$query2 = "INSERT INTO users(user_name, fname, lname, gender, permanent_adrs, present_adrs, city, zip_code, country, phone, email) VALUES ('$uname','$fname','$lname','$gender','$adrs1','$adrs2','$city','$zip','$country','$phone','$email')";
			execute($query2);
			echo "done";
?>