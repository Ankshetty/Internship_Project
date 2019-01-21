<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style_register_user.css" />
    <script src="main.js"></script>
</head>
<body>
	<form action="index.html" method="post">
        
		<div class="inner_container">
			<button class="logout_button" type="submit">Home</button>	
		</div>
	</form>

	<div class="login-box">
    	<img src="images/avatar1.png" class="avatar">
            <h1>Sign Up Here</h1>
		    <form action="register.html" method="post">
			
			
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="user-name" required>

				<label><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="user-email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="user-password" required>

				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Re-enter Password" name="user-cpassword" required>

				<label><b>Contact Number</b></label>
				<input type="tel" placeholder="Enter mobile number" name="user-number" required>

				<label><b>Address</b></label>
				<textarea placeholder="Enter Address" name="user-address" cols="27" rows="5" required spellcheck="true">
			    </textarea>

				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
			
		</form>
	</div>
		
</body>
</html>