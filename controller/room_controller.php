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
		$query = "SELECT * FROM reserved_room";
		$result = get($query);
		return $result;
	}
	function rooms()
	{
		$query = "SELECT * FROM room";
		$result = get($query);
		return $result;
	}
	function clients_reserved_room($user)
	{
		$uname = $user;
		$query = "SELECT room_number,room_type,bedding_type,meal_plan,checkin,checkout FROM reserved_room WHERE user_name='$uname'";
		$result = get($query);
		return $result;
	}
?>