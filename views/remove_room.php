<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	/*if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:login.php");
	}*/
?>

<html>
	<title></title>
	<head>
		<script>
			function remove()
			{
				alert("Working!");
				var error = "";
				var room_number = document.getElementById("rn").value;
				if(room_number == "")
				{
					error = "Room number required";
					document.getElementById("msg").innerHTML = error;
				}
				else
				{
					var xhtml = new XMLHttpRequest();
					xhtml.onreadystatechange = function()
					{
						if(xhtml.readyState == 4 && xhtml.status == 200)
						{
							var response = xhtml.responseText;
							if(response == true)
							{
								document.getElementById("msg").innerHTML = "Room Removed!";
							} 
						}
					}
					xhtml.open("GET","../controller/remove_room_controller.php",true);
					xhtml.send("rn="+room_number);
				}
			}

		</script>
	</head>
	<body style="background-color: green;">
		<center>
			<font id="msg" size="4" style="color: blue;"></font>
			
				<table>
					<tr>
						<td>Room Number <input type="text" name="rn" id="rn"><br></td>
					</tr>
				</table>
				<br>
				<input type="button" name="remove" value="Remove" onclick="remove()">
			
		</center>
	</body>
</html>