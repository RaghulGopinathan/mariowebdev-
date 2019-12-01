<?php
session_start();
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
if(isset($_SESSION['emaile']))
{?>
<html>
<head>
	<title>Lifestyle-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="setsheet.css">
</head>
<body>
	<div class="wrapper">
	<nav class="navbar navbar-fixed-top">
<div class="na">Lifestyle stores</div>
<ul id ="menu">
	<li><a href="index.php">Home</span></a></li>
<li><a href="product.php">Cart</span></a></li>
<li><a href="logout.php">Logout</span></a></li>
</ul>
</nav>   
<div class="container st">
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
						<h3>SETTINGS</h3>
			</div>
		    <div class="panel-body">
				<form method="post" action="settingsvalidation.php">
					<div class="form-group col-md-12">
						
							<label for="email">E-MAIL</label>
							<input type="email" class="form-control" name="email">
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="oldpassword">OLD PASSWORD</label>
							<input type="password" class="form-control " name="oldpassword">
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="newpassword">NEW PASSWORD</label>
							<input type="password" class="form-control "name="newpassword">
						
					</div>
					<div class="form-group col-md-12">
							<button class="btn btn-success">Submit</button>
					</div>	
				</form>
			</div>
		</div>
	</div>
</div>

</div>
</body>
</html>
<?php }
else
{?>
<html>
<head>
	<title>Lifestyle-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="successheet.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		<p style="text-decoration:bold;">Please login to access your settings</p>
		<a href="login.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>
<?php } ?>