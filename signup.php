<?php
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));

?>
<html>
<head>
	<title>Lifestyle-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="signupsheet.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top">
<div class="na">Lifestyle stores</div>
<ul id ="menu">
	<li><a href="index.php">Home</span></a></li>
	<li><a href="login.php">Login</span></a></li>
	<li><a href="settings.php">Settings</span></a></li>
</ul>
</nav>   
	<div class="container st">
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
						<h3>SIGN UP</h3>
			</div>
		    <div class="panel-body">
				<form method="post" action="signupvalidation.php">
					<div class="form-group col-md-12">
						
							<label for="name">USER NAME</label>
							<input type="text" class="form-control " name="name" pattern="[a-zA-Z0-9\s]+" title="The name must contain characters and number only" required>
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="email">E-MAIL</label>
							<input type="email" class="form-control "name="email" required>
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="password">PASSWORD</label>
							<input type="password" class="form-control " name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="The password must contain uppercase,lowercase and numbers" required>
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="city">CITY</label>
							<input type="text" class="form-control " name="city" title="The city must contain characters only" required>
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="address">ADDRESS</label>
							<input type="text" class="form-control " name="address" title="The address must contain characters and number only" required>
						
					</div>
					<div class="form-group col-md-12">
							<button class="btn btn-success">Submit</button>
					</div>	
					<div class="panel-footer">
				<a href="signup.html">Already have an account?..</a>
		</div>

				</form>
			</div>
		</div>
	</div>
</div>
 
 </body>
 </html>
