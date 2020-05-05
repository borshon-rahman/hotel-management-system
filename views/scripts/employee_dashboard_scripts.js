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
				var err_fname = "";
				var lname = document.getElementById("lname").value;
				var err_lname = "";
				var email = document.getElementById("email").value;
				var err_email = "";
				var country = document.getElementById("country").value;
				var err_country = "";
				var phone = document.getElementById("phone").value;
				var err_phone = "";
				var msg = "";
				var room_type = document.getElementById("room_type").value;
				var room_number = document.getElementById("room_number").value;
				var bedding_type = document.getElementById("bedding_type").value;
				var meal_plan = document.getElementById("meal_plan").value;
				var checkin_date = document.getElementById("checkin_date").value;
				var checkin_month = document.getElementById("checkin_month").value;
				var checkin_year = document.getElementById("checkin_year").value;
				var checkout_date = document.getElementById("checkout_date").value;
				var checkout_month = document.getElementById("checkout_month").value;
				var checkout_year = document.getElementById("checkout_year").value;

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
				if(email == "")
				{
					err_email = "Email Required";
					document.getElementById("err_email").innerHTML = err_email;
				}
				if(phone == "")
				{
					err_phone = "Phone Number Required";
					document.getElementById("err_phone").innerHTML = err_phone;
				}
				else
				{
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function()
					{
						if(xhttp.readyState == 4 && xhttp.status == 200)
						{
							response = xhttp.responseText;
							if(response == "done")
							{
								msg = "Room has been Reserved!";
								document.getElementById("msg").innerHTML = msg;
							}
						}
					}
					xhttp.open("GET","../controller/room_reserve_controller.php?fname="+fname+"&lname="+lname+"&email="+email+"&country="+country+"&phone="+phone+"&room_type="+room_type+"&room_number="+room_number+"&bedding_type="+bedding_type+"&meal_plan="+meal_plan+"&checkin_date="+checkin_date+"&checkin_month="+checkin_month+"&checkin_year="+checkin_year+"&checkout_date="+checkout_date+"&checkout_month="+checkout_month+"&checkout_year="+checkout_year,true);
					xhttp.send();
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
							document.getElementById("msg").innerHTML = msg;
						}
						else
						{
							msg = "Error Occurred";
							document.getElementById("msg").innerHTML = msg;
						}
					}
				}
				xhttp.open("GET","../controller/reservation_cancel_controller.php?room_number="+room_number,true);
				xhttp.send();
			}