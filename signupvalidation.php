<?php
 $con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $city=$_POST['city'];
 $address=$_POST['address'];
 $namequery= "SELECT * FROM signup WHERE email='$email'";
 $namecall=mysqli_query($con,$namequery);
 $namenum=mysqli_num_rows($namecall);
 if($namenum==0)
 {
 $query="INSERT INTO signup (name,email,password,city,address) VALUES ('$name','$email','$password','$city','$address')";
 $call=mysqli_query($con,$query);
 ?>
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
		<p style="text-decoration:bold;">You have successfully Registered </p>
		<a href="login.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>
<?php
}
else{?>
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
		<p style="text-decoration:bold;">This Email has been already registered with other user</p>
		<a href="signup.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>

<?php
}
?>
