<?php
	require "../models/db_connect.php";
	$room_number = $_GET['rn'];
	$query = "DELETE FROM room WHERE room_number='$room_number'";
	$affected = del_execute($query);
	echo $affected;
?>