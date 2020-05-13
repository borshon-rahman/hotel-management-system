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
				var now = new Date();
				if(checkin < now)
				{
					err_checkin = "Invalid Date";
					document.getElementById("err_checkin").innerHTML = err_checkin;
					error = true;
				}
				if(checkout < now)
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
							}
							else
							{
								msg = "Error Occurred";
								document.getElementById("msg").innerHTML = msg;
							}
						}
					}
					xhttp.open("GET","../controller/room_reserve_controller.php?fname="+fname+"&lname="+lname+"&email="+email+"&country="+country+"&phone="+phone+"&room_type="+room_type+"&room_number="+room_number+"&bedding_type="+bedding_type+"&meal_plan="+meal_plan+"&checkin="+checkin+"&checkout="+checkout,true);
					xhttp.send();
					}
				}

			}