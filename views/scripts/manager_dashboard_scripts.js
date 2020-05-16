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
				var err_fname = document.getElementById("err_fname").innerHTML = "";
				var lname = document.getElementById("lname").value;
				var err_lname = document.getElementById("err_lname").innerHTML = "";
				var gender = document.getElementsByName("gender");
				for(i = 0; i < gender.length; i++) 
				{ 
                	if(gender[i].checked)
                	{
                		gender = gender[i].value;
                	} 
            	} 
				
				var err_gender = document.getElementById("err_gender").innerHTML = "";
				var p_address = document.getElementById("adrs1").value;
				var err_p_address = document.getElementById("err_p_address").innerHTML = "";
				var pre_address = document.getElementById("adrs2").value;
				var err_pre_address = document.getElementById("err_pre_address").innerHTML = "";
				var city = document.getElementById("city").value;
				var err_city = document.getElementById("err_city").innerHTML = "";
				var zip = document.getElementById("zip").value;
				var err_zip = document.getElementById("err_zip").innerHTML = "";
				var country = document.getElementById("country").value;
				var err_country = document.getElementById("err_country").innerHTML = "";
				var phone = document.getElementById("phone").value;
				var err_phone = document.getElementById("err_phone").innerHTML = "";
				var email = document.getElementById("email").value;
				var err_email = document.getElementById("err_email").innerHTML = "";
				var uname = document.getElementById("uname").value;
				var err_uname = document.getElementById("err_uname").innerHTML = "";
				var status = document.getElementById("status").value;
				var pass = document.getElementById("pass").value;
				var err_pass = document.getElementById("err_pass").innerHTML = "";
				var cpass = document.getElementById("cpass").value;
				var err_cpass = document.getElementById("err_cpass").innerHTML = "";
				document.getElementById("msg").innerHTML = "";
				var flag = false;
				if(fname == "")
				{
					
					err_fname = "First Name Required";
					document.getElementById("err_fname").innerHTML = err_fname;
					flag = true;
				}
				if(lname == "")
				{
					err_lname = "Last Name Required";
					document.getElementById("err_lname").innerHTML = err_lname;
					flag = true;
				}
				if(gender == "")
				{
					err_gender = "Gender Required";
					document.getElementById("err_gender").innerHTML = err_gender;
					flag = true;
				}
				if(p_address == "")
				{
					err_p_address = "Permanent Address Required";
					document.getElementById("err_p_address").innerHTML = err_p_address;
					flag = true;
				}
				if(pre_address == "")
				{
					err_pre_address = "Present address Require";
					document.getElementById("err_pre_address").innerHTML = err_pre_address;
					flag = true;
				}
				if(city == "")
				{
					err_city = "City Required";
					document.getElementById("err_city").innerHTML = err_city;
					flag = true;
				}
				if(zip == "")
				{
					err_zip = "Zip Required";
					document.getElementById("err_zip").innerHTML = err_zip;
					flag = true;
				}
				if(country == "")
				{
					err_country = "Country Required";
					document.getElementById("err_country").innerHTML = err_country;
					flag = true;
				}
				if(phone == "")
				{
					err_phone = "Phone Required";
					document.getElementById("err_phone").innerHTML = err_phone;
					flag = true;
				}
				if(email == "")
				{
					err_email = "Email Required";
					document.getElementById("err_email").innerHTML = err_email;
					flag = true;
				}
				if(uname == "")
				{
					err_uname = "Username Required";
					document.getElementById("err_uname").innerHTML = err_uname;
					flag = true;
				}
				if(pass == "")
				{
					err_pass = "Password Required";
					document.getElementById("err_pass").innerHTML = err_pass;
					flag = true;
				}
				else
				{
					if(flag == false){
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
									alert("User Registered");
									//document.getElementById("msg").innerHTML = "User Registered";
									fname = document.getElementById("fname").value = "";
									lname = document.getElementById("lname").value = "";
									
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
									add_user();
								}
								else
								{
									alert("Error Occured");
									//document.getElementById("msg").innerHTML = "Error Occured";
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
			}

function removeUser()
			{
				var uname = document.getElementById("uname").value;
				var message = document.getElementById("message").innerHTML = "";
				var err_uname = document.getElementById("err_uname").innerHTML = "";
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
								alert(message);
								//document.getElementById("message").innerHTML = message;
								uname = document.getElementById("uname").value = "";
								document.getElementById("err_uname").innerHTML = "";
								all_user();
							}
							else
							{
								message = "User not found";
								alert(message);
								//document.getElementById("message").innerHTML = message;
							}
						}
					}
					xhtml.open("GET","../controller/remove_user_controller.php?uname="+uname,true);
					xhtml.send();
				}
			}

			function all_user()
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						document.getElementById("content").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET","man_all_user.php",true);
				xhttp.send();
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
function roomReserve()
			{
				var fname = document.getElementById("fname").value;
				var err_fname = document.getElementById("err_fname").innerHTML = "";
				var lname = document.getElementById("lname").value;
				var err_lname = document.getElementById("err_lname").innerHTML = "";
				var email = document.getElementById("email").value;
				var err_email = document.getElementById("err_email").innerHTML = "";
				var country = document.getElementById("country").value;
				var err_country = "";
				var phone = document.getElementById("phone").value;
				var err_phone = document.getElementById("err_phone").innerHTML = "";
				var msg = document.getElementById("msg").innerHTML = "";
				var room_type = document.getElementById("room_type").value;
				var room_number = document.getElementById("room_number").value;
				var bedding_type = document.getElementById("bedding_type").value;
				var meal_plan = document.getElementById("meal_plan").value;
				var checkin = document.getElementById("checkin").value;
				var err_checkin = document.getElementById("err_checkin").innerHTML = "";
				var checkout = document.getElementById("checkout").value;
				var err_checkout = document.getElementById("err_checkout").innerHTML = "";
				var error = false;

				if(fname == "")
				{
					err_fname = "First Name Required";
					document.getElementById("err_fname").innerHTML = err_fname;
					error = true;
				}
				if(lname == "")
				{
					err_lname = "Last Name Required";
					document.getElementById("err_lname").innerHTML = err_lname;
					error = true;
				}
				if(email == "")
				{
					err_email = "Email Required";
					document.getElementById("err_email").innerHTML = err_email;
					error = true;
				}
				if(phone == "")
				{
					err_phone = "Phone Number Required";
					document.getElementById("err_phone").innerHTML = err_phone;
					error = true;
				}

				/*var checkinDate = checkin;
				checkinDate = new Date(checkinDate);
				var options = { year: 'numeric', month: 'short', day: '2-digit'};
				var checkinDate = new Intl.DateTimeFormat('en-GB', options).format(checkinDate);
				checkinDate = checkinDate.replace(/ /g,'-');
				alert("New:"+checkinDate+" Old:"+checkin);

				var checkoutDate = checkout;
				checkoutDate = new Date(checkoutDate);
				var options = { year: 'numeric', month: 'short', day: '2-digit'};
				var checkoutDate = new Intl.DateTimeFormat('en-GB', options).format(checkoutDate);
				checkoutDate = checkoutDate.replace(/ /g,'-');
				alert("New:"+checkoutDate+" Old:"+checkout);*/

				var d = new Date();
				var options = { day: '2-digit', month: 'short', year: 'numeric'};
				var today = new Intl.DateTimeFormat('en-GB', options).format(d);
				today = today.replace(/ /g,'-');
				alert(today);
				if(checkin < today)
				{
					err_checkin = "Invalid Date";
					document.getElementById("err_checkin").innerHTML = err_checkin;
					error = true;
				}
				if(checkout < today)
				{
					err_checkout = "Invalid Date";
					document.getElementById("err_checkout").innerHTML = err_checkout;
					error = true;
				}
				else
				{
					if(error == false){
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function()
					{
						if(xhttp.readyState == 4 && xhttp.status == 200)
						{
							response = xhttp.responseText;
							if(response == "done")
							{
								msg = "Room has been Reserved!";
								alert(msg);
								//document.getElementById("msg").innerHTML = msg;

								fname = document.getElementById("fname").value = "";
								lname = document.getElementById("lname").value = "";
								email = document.getElementById("email").value = "";
								phone = document.getElementById("phone").value = "";
								room_reserve();
							}
						}
					}
					xhttp.open("GET","../controller/room_reserve_controller.php?fname="+fname+"&lname="+lname+"&email="+email+"&country="+country+"&phone="+phone+"&room_type="+room_type+"&room_number="+room_number+"&bedding_type="+bedding_type+"&meal_plan="+meal_plan+"&checkin="+checkin+"&checkout="+checkout,true);
					xhttp.send();
					}
				}
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
			function cancel(rn)
			{
				var msg = "";
				room_number = rn;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if(xhttp.readyState == 4 && xhttp.status == 200)
					{
						response = xhttp.responseText;
						if(response == "done")
						{
							msg = "Reservation Canceled";
							alert(msg);
							reserved_room();
							//document.getElementById("msg").innerHTML = msg;
						}
						else
						{
							msg = "Error Occurred";
							alert(msg);
							//document.getElementById("msg").innerHTML = msg;
						}
					}
				}
				xhttp.open("GET","../controller/reservation_cancel_controller.php?room_number="+room_number,true);
				xhttp.send();
			}