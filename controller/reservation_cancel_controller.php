<?php
	require "../models/db_connect.php";
		$room_number = $_GET['room_number'];
		$query1 = "DELETE FROM reserved_room WHERE room_number='$room_number'";
		execute($query1);
		$query2 = "UPDATE room SET status='available' WHERE room_number= '$room_number'";
		execute($query2);
		echo "done";
?>