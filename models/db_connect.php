<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "sunrise_hotel";
	function get($query)
	{
		global $serverName;
		global $userName;
		global $password;
		global $dbName;
		$connection = mysqli_connect($serverName, $userName, $password, $dbName);
		$result = mysqli_query($connection, $query);
		mysqli_close($connection);
		return $result;
	}

	function execute($query)
	{
		global $serverName;
		global $userName;
		global $password;
		global $dbName;
		$connection = mysqli_connect($serverName, $userName, $password, $dbName);
		$result = mysqli_query($connection, $query);
		mysqli_close($connection);
	}
?>