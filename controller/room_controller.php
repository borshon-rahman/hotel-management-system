<?php
	require "../models/db_connect.php";
	function available_room()
	{
		$query = "SELECT * FROM room WHERE status='available'";
		$result = get($query);
		return $result;
	}
	function reserved_room()
	{
		$query = "SELECT * FROM room WHERE status='reserved'";
		$result = get($query);
		return $result;
	}
?>