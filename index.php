<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script>
	
		function validateForm() {
				var fullname = document.forms["register"]["fullname"].value;
				var contact = document.forms["register"]["contact"].value;
				var nic = document.forms["register"]["nic"].value;
				var course = document.forms["register"]["course"].value;
				var email = document.forms["register"]["email"].value;

				//validation

				if(fullname == "" || email == "" || nic == "" || course == "" || contact == "") {
					alert('Please fill all required fields');
					return false;
					
				}
				
				if(contact.length < 10 || contact.length > 11) {
					alert ('Please enter a valid phone number');
					return false;
				}
				
				var validEmail = /\S+@\S+\.\S+/;
				if(email.match(validEmail)) {
					alert ('Please enter a valid email');
					return false;
				}


		}	
	</script>
	<style>
		form {
		  	display: inline-block;
		  	text-align: left;
			}
		label {
		  display: block;
		  float: left;
		  width: 150px;
		  margin-right: 10px;
		  text-align: left;
		}

		input[type="text"],
		input[type="email"],
		select {
		  display: block;
		  float: left;
		  width: 250px;
		  margin-bottom: 10px;
		}
		
		.form2 {
			margin-left: 150px;
		}
	
	</style>

</head>

<body>

	<div class="container">
			<h1>Course Registration Form</h1>
			<form action="submit.php" name="register" method="POST" onsubmit="return validateForm()">

				<label>Full Name</label>
				<input type="text" name="fullname" id="fullname"><br>

				<label>Contact Number</label>
				<input type="text" name="contact" id="contact"><br>

				<label>NIC</label>
				<input type="text" name="nic" id="nic"><br>

				<label>Select a Course</label>
				<select name="course" id="course">
					<option>PHYS</option>
					<option>BCS</option>
					<option>PS</option>
					<option>COSC</option>
				</select><br>
								
				
				<label>Email</label>
				<input type="text" name="email" id="email"><br>

				<input type="submit" value="REGISTER">
				<input type="reset" value="CLEAR">

			</form>

			<form class="form2" action="view.php" name="view" method="POST" onsubmit="validateView()">
				<p>If you are already registered, View your details here...</p>
				<br>
				<label>NIC</label>
				<input type="text" name="nic_view" id="nic_view"><br>

				<input type="submit" value="VIEW" name="viewbtn">

			</form>
		</div>

</body>

</html>