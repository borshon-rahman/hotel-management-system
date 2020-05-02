<?php
		require "../models/db_connect.php";
			$rn = $_GET['rn'];
			$rtype = $_GET['rt'];
			$rn = htmlspecialchars($rn);
			$rtype = htmlspecialchars($rtype);
			$status = "available";

			$query = "INSERT INTO room(room_number, type, status) VALUES ('$rn','$rtype','$status')";
			execute($query);
			echo "done";
?>