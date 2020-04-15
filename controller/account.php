<?php
	require "../models/db_connect.php";
			$uname = "";
			$userStatus = "";
				session_start();
				if(isset($_SESSION['loggedinuser']))
				{
					$uname = $_SESSION['loggedinuser'];
					$query = "SELECT status FROM login WHERE user_name='$uname'";
					$result = get($query);
					if(mysqli_num_rows($result) > 0)
					{
						$rows = mysqli_fetch_assoc($result);
						if($rows["status"] == "admin")
						{
							header("Location:../views/admin_dashboard.php");
						}
						elseif($rows["status"] == "manager")
						{
							header("Location:../views/manager_dashboard.php");
						}
						elseif($rows["status"] == "stuff")
						{
							header("Location:../views/employee_dashboard.php");
						}
					}	
				}
				elseif(!isset($_SESSION['loggedinuser']))
				{
					header("Location:../views/login.php");
				}
?>