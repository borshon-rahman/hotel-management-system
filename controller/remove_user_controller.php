<?php
	require "../models/db_connect.php";
		$uname = $_GET['uname'];

		$query1 = "DELETE FROM login WHERE user_name='$uname'";
		$result1 = del_execute($query1);
		$query2 = "DELETE FROM users WHERE user_name='$uname'";
		$result2 = del_execute($query2);
		if($result1 > 0 && $result2 > 0)
		{
			echo "done";
		}
		else
		{
			echo "not_done";
		}
		
?>