<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:login.php");
	}
?>
<html>
	<title></title>
	<head></head>
	<body style="background-image: url(../storage/images/image.png); background-color: yellow; background-blend-mode: lighten;">
		<?php
			/*$uname = "";
			$err = "";
			if(isset($_POST['delete']))
			{
				if(empty($_POST['uname']))
				{
					$err = "Eter Username";
				}
				else
				{
					$uname = htmlspecialchars($_POST['uname']);
					$xml = new DOMDocument();
					$xml->load("data\login.xml");
					$rootTag = $xml->getElementsByTagName("user_data")->item(0);
					$user_name = "";
					for($i=0;$i<count($login->user);$i++)
					{
						$user_name = (String)$login->user[$i]->uname;
						if($uname == $user_name)
						{
							$user_name->parentNode
						}
						$xml->save("data\login.xml");
					}
			}*/
		?>
		<form method="post" action="" style="background-color: rgb(11, 13, 71);">
			<center>
				<span style="text-align: left;">
				<a href="../index.php"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font>
				</a>
			</span>
			</center>
			<div>
				<div style="text-align: right;"><input type="submit" name="logout" value="Log out" style="background-color: rgb(11, 13, 71); color: gray;">
				</div>
			</div>
		</form>
		<form method="post" action="">
			<center>
				<table>
					<tr>
						<td><b>Username </b></td>
						<td><input type="text" name="uname"> &nbsp <font size="2" style="color: red"><b></b></font></td>
					</tr>
				</table>
				<input type="submit" name="delete" value="Discard">
			</center>
		</form>
	</body>
</html>