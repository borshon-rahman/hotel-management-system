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
	<head>
		<script>
			
		</script>
	</head>
	<body style="background-image: url(../storage/images/image.png); background-color: yellow; background-blend-mode: lighten;">
		<div>
			<center>
				<span><font size="4" style="color: red"><b id="message"></b></font></span>
				<table>
					<tr>
						<td><b>Username </b></td>
						<td><input id="uname" type="text" name="uname"> &nbsp <font size="2" style="color: red"><b id="err_uname"></b></font></td>
					</tr>
				</table>
				<button onclick="removeUser()">Discard</button>
			</center>
		</div>
	</body>
</html>