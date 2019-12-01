<?php
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
?>
<html>
<head>
	<title>Lifestyle-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="loginsheet.css">
</head>
<body>
	<nav class="navbar navbar-fixed-top">
<div class="na">Lifestyle stores</div>
<ul id ="menu">
<li><a href="index.php">Home</span></a></li>
<li><a href="signup.php">signup</span></a></li>

</ul>
</nav>
	<div class="container st">
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
						<h3>LOGIN</h3>
			</div>
		    <div class="panel-body">
				<form method="post" action="loginvalidation.php">
					<div class="form-group col-md-12">
						
							<label for="email">E-MAIL</label>
							<input type="email" class="form-control " name="email">
						
					</div>
					<div class="form-group col-md-12">
						
							<label for="password">PASSWORD</label>
							<input type="password" class="form-control" name="password">
						
					</div>
					<div class="form-group col-md-12">
							<button class="btn btn-success">Submit</button>
					</div>	
				</form>
				</form>
			</div>
				</div>
</div>


</body>
</html>