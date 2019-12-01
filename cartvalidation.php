<?php
session_start();
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$name=$_POST['cart'];
$query="SELECT * FROM PRODUCT WHERE id='" .$name. "' ";
$call=mysqli_query($con,$query);
$val=mysqli_fetch_array($call);
if(isset($_SESSION['emaile']))
{
$iquery="INSERT INTO cart(product,price) VALUES('$val[1]','$val[2]')";
$icall=mysqli_query($con,$iquery); 
header('location:cart.php');}
else{
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
		<p style="text-decoration:bold;">Please login or signup</p>
		<a href="login.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>
<?php
}
?>
