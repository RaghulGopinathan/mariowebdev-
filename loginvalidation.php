<?php 
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM signup WHERE email='" .$email. "' && password='" .$password. "'";
$call=mysqli_query($con,$query);
$num=mysqli_num_rows($call);
if($num==1)
{
		session_start();
		$_SESSION['emaile']=$email;
		header('location:product.php');
		

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
		<p style="text-decoration:bold;">Please enter correct email address and password </p>
		<a href="login.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>
<?php
} 

?>
