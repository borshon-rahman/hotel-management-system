<?php
		/*require "../models/db_connect.php";
		$msg = "";
		$rn = $_GET['key'];
		$query = "DELETE FROM room WHERE room_number='$rn'";
		execute($query);
		$msg = "Room has been deleted!";
		return $msg;*/

		require "../models/db_connect.php";
		if(isset($_POST['rn']))
		{
			$room_number = $_POST['rn'];
			$query = "DELETE FROM room WHERE room_number='$room_number'";
			$result = execute($query);
			return $result;
		}
	?>