<?php
	require "../models/db_connect.php";
	function user_details($uname)
	{
		$query = "SELECT * FROM users WHERE user_name='$uname'";
		$result = get($query);
		return $result;
	}
	function users()
	{
		$query = "SELECT * FROM users";
		$result = get($query);
		return $result;
	}
	function man_users()
	{
		$query = "SELECT * FROM users WHERE status='stuff'";
		$result = get($query);
		return $result;
	}
?>