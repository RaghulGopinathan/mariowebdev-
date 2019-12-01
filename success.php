<?php
session_start();
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$query="SELECT * FROM cart";
$call=mysqli_query($con,$query);
$rows=mysqli_num_rows($call);
if($rows>0)
{
while($arr=mysqli_fetch_array($call))
{
$insertquery="INSERT INTO orders (item_name,price,ordered_by) values ('" .$arr[1]. "','" .$arr[2]. "','" .$_SESSION['emaile']. "')";
$calliquery=mysqli_query($con,$insertquery);} ?>
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
		<p style="text-decoration:bold;">Order has been Successfully placed</p>
		<a href="product.php"><button class="btn btn-primary">Continue shopping</button></a>
	</div>
</div>
</body>
</html>
<?php
}

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
		<p style="text-decoration:bold;">Please add items in cart</p>
		<a href="cart.php"><button class="btn btn-primary">Cart</button></a>
	</div>
</div>
</body>
</html>
<?php
};
?>