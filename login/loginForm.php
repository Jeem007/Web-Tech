

<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>



<form action ="SignUP.php" method='post'>
    <fieldset style = "background: #3ba56b; border: 2px solid #a4a2bb;">
				<legend>Legend1: Sign-up Form </legend>
				<label>First Name:</label>
				<input required type="text"  name="FirstName" placeholder="Enter First Name:">
				<br><br>
                <label>Last Name:</label>
				<input required type="text"  name="Lastname" placeholder="Enter Last Name:">
				<br><br>

				<label>Email:</label>
				<input required type="Email"  name="Email" placeholder="Enter your email:">
				<br><br>

                <label>Password:</label>
                <input type=password  name="password" placeholder="Enter your password">
                <br><br>

				<select name="gender">
                    <option value="">Select Gender</option>
                    <option  value ="Male">Male</option>
                    <option  value= "Female">Female</option>
                    <option  value= " Others" >Others </option>
                </select>
                <br><br>
			
				<button type="">Submit</button>
				<!--<a href="Forgot pasword?">Forgot Password?</a><br> -->
                
            </fieldset>
        </form>
<br><br>
<form>
   
	</body>
</html>
