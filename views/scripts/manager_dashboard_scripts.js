function add_user()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("content").innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","man_add_user.php",true);
	xhttp.send();
}
			function user_add()
			{
				var fname = document.getElementById("fname").value;
				var err_fname = "";
				var lname = document.getElementById("lname").value;
				var err_lname = "";
				var gender = document.getElementById("gender").value;
				var err_gender = "";
				var p_address = document.getElementById("adrs1").value;
				var err_p_address = "";
				var pre_address = document.getElementById("adrs2").value;
				var err_pre_address = "";
				var city = document.getElementById("city").value;
				var err_city = "";
				var zip = document.getElementById("zip").value;
				var err_zip = "";
				var country = document.getElementById("country").value;
				var err_country = "";
				var phone = document.getElementById("phone").value;
				var err_phone = "";
				var email = document.getElementById("email").value;
				var err_email = "";
				var uname = document.getElementById("uname").value;
				var err_uname = "";
				var status = document.getElementById("status").value;
				var pass = document.getElementById("pass").value;
				var err_pass = "";
				var cpass = document.getElementById("cpass").value;
				var err_cpass = "";
				if(fname == "")
				{
					
					err_fname = "First Name Required";
					document.getElementById("err_fname").innerHTML = err_fname;
				}
				if(lname == "")
				{
					err_lname = "Last Name Required";
					document.getElementById("err_lname").innerHTML = err_lname;
				}
				if(gender == "")
				{
					err_gender = "Gender Required";
					document.getElementById("err_gender").innerHTML = err_gender;
				}
				if(p_address == "")
				{
					err_p_address = "Permanent Address Required";
					document.getElementById("err_p_address").innerHTML = err_p_address;
				}
				if(pre_address == "")
				{
					err_pre_address = "Present address Require";
					document.getElementById("err_pre_address").innerHTML = err_pre_address;
				}
				if(city == "")
				{
					err_city = "City Required";
					document.getElementById("err_city").innerHTML = err_city;
				}
				if(zip == "")
				{
					err_zip = "Zip Required";
					document.getElementById("err_zip").innerHTML = err_zip;
				}
				if(country == "")
				{
					err_country = "Country Required";
					document.getElementById("err_country").innerHTML = err_country;
				}
				if(phone == "")
				{
					err_phone = "Phone Required";
					document.getElementById("err_phone").innerHTML = err_phone;
				}
				if(email == "")
				{
					err_email = "Email Required";
					document.getElementById("err_email").innerHTML = err_email;
				}
				if(uname == "")
				{
					err_uname = "Username Required";
					document.getElementById("err_uname").innerHTML = err_uname;
				}
				if(pass == "")
				{
					err_pass = "Password Required";
					document.getElementById("err_pass").innerHTML = err_pass;
				}
				else
				{
					if(cpass == pass)
					{
						var xhtml = new XMLHttpRequest();
						xhtml.onreadystatechange = function()
						{
							if(xhtml.readyState == 4 && xhtml.status == 200)
							{
								var response = xhtml.responseText;
								if(response == "done")
								{
									document.getElementById("msg").innerHTML = "User Registered";
									fname = document.getElementById("fname").value = "";
									lname = document.getElementById("lname").value = "";
									gender = document.getElementById("gender").value = "";
									p_address = document.getElementById("adrs1").value = "";
									pre_address = document.getElementById("adrs2").value = "";
									city = document.getElementById("city").value = "";
									zip = document.getElementById("zip").value = "";
									country = document.getElementById("country").value = "";
									phone = document.getElementById("phone").value = "";
									email = document.getElementById("email").value = "";
									uname = document.getElementById("uname").value = "";
									pass = document.getElementById("pass").value = "";
									cpass = document.getElementById("cpass").value = "";

									document.getElementById("err_fname").innerHTML = "";
									document.getElementById("err_lname").innerHTML = "";
									document.getElementById("err_gender").innerHTML = "";
									document.getElementById("err_p_address").innerHTML = "";
									document.getElementById("err_pre_address").innerHTML = "";
									document.getElementById("err_city").innerHTML = "";
									document.getElementById("err_zip").innerHTML = "";
									document.getElementById("err_country").innerHTML = "";
									document.getElementById("err_phone").innerHTML = "";
									document.getElementById("err_email").innerHTML = "";
									document.getElementById("err_uname").innerHTML = "";
									document.getElementById("err_pass").innerHTML = "";
								}
								else
								{
									document.getElementById("msg").innerHTML = "Error Occured";

									document.getElementById("err_fname").innerHTML = "";
									document.getElementById("err_lname").innerHTML = "";
									document.getElementById("err_gender").innerHTML = "";
									document.getElementById("err_p_address").innerHTML = "";
									document.getElementById("err_pre_address").innerHTML = "";
									document.getElementById("err_city").innerHTML = "";
									document.getElementById("err_zip").innerHTML = "";
									document.getElementById("err_country").innerHTML = "";
									document.getElementById("err_phone").innerHTML = "";
									document.getElementById("err_email").innerHTML = "";
									document.getElementById("err_uname").innerHTML = "";
									document.getElementById("err_status").innerHTML = "";
									document.getElementById("err_pass").innerHTML = "";
								}
							}
						}
						xhtml.open("GET","../controller/add_user_controller.php?fname="+fname+"&lname="+lname+"&gender="+gender+"&p_address="+p_address+"&pre_address="+pre_address+"&city="+city+"&zip="+zip+"&country="+country+"&phone="+phone+"&email="+email+"&uname="+uname+"&status="+status+"&pass="+pass,true);
						xhtml.send();
					}
					else
					{
						err_cpass = "Password did not matched";
						document.getElementById("err_cpass").innerHTML = err_cpass;
					}
				}
			}
function remove_user()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("content").innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","remove_user.php",true);
	xhttp.send();
}
function removeUser()
			{
				var uname = document.getElementById("uname").value;
				var message = "";
				var err_uname = "";
				if(uname == "")
				{
					err_uname = "Enter Username";
					document.getElementById("err_uname").innerHTML = err_uname;
				}
				else
				{
					var xhtml = new XMLHttpRequest();
					xhtml.onreadystatechange = function()
					{
						if(xhtml.readyState == 4 && xhtml.status == 200)
						{
							var response = xhtml.responseText;
							if(response == "done")
							{
								message = "User Removed";
								document.getElementById("message").innerHTML = message;
								uname = document.getElementById("uname").value = "";
								document.getElementById("err_uname").innerHTML = "";
							}
							else
							{
								message = "User not removed";
								document.getElementById("message").innerHTML = message;
							}
						}
					}
					xhtml.open("GET","../controller/remove_user_controller.php?uname="+uname,true);
					xhtml.send();
				}
			}
function room_reserve()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("content").innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","room_reserve.php",true);
	xhttp.send();
}
function available_room()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("content").innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","available_room.php",true);
	xhttp.send();
}
function reserved_room()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(xhttp.readyState == 4 && xhttp.status == 200)
		{
			document.getElementById("content").innerHTML = xhttp.responseText;
		}
	}
	xhttp.open("GET","reserved_room.php",true);
	xhttp.send();
}