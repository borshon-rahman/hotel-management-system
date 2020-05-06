<?php
	require "../models/db_connect.php";
		$uname = $_GET['user_name'];

		$query1 = "DELETE FROM login WHERE user_name='$uname'";
		execute($query1);
		$query2 = "DELETE FROM users WHERE user_name='$uname'";
		execute($query2);
		echo "done";
?>