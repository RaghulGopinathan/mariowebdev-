<?php
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
session_start();
if(isset($_SESSION['emaile']))
{?>
<html>
<head>
	<title>Lifestyle-Store</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="cartsheet.css">
</head>
<body>
	<div class="cartimg">
		<nav class="navbar navbar-fixed-top">
                <div class="na">Lifestyle stores</div>
                <?php
				  if(isset($_SESSION['emaile']))
				{?>
					<h5 style="color:white;text-align:center;margin-top:2.4%;margin-right:82%;font-family: sans-serif;font-size:19px;
    font-weight: 50;">WELCOME, <?php echo $_SESSION['emaile'];?></h5>

				<?php };
				?>
                <ul id ="menu">
                	<li><a href="index.php">Home</span></a></li>
                    <li><a href="product.php">Products</span></a></li>
                    <li><a href="settings.php">Settings</span></a></li>
                    <li><a href="logout.php">Logout</span></a></li>
                </ul>
        </nav>
	<div class="container panel">
		<table class="table table-striped">
			<tbody><form method="post" action="cartvalidation2.php">
				<tr>
					<th>Item Name</th>
					<th>Price</th>
				</tr>
					<?php 
				$count=0;
				$selectquery="SELECT * FROM cart";
				$callselectquery=mysqli_query($con,$selectquery);
				$rows=mysqli_num_rows($callselectquery);
				while($arr=mysqli_fetch_array($callselectquery)){
					@$count=$count+$arr[2]; 
				?>
				<tr><td><?php echo $arr[1]; ?> </td><td>Rs <?php echo $arr[2]; ?></td><td><button type="submit" class="btn btn-danger" name="remove" value=<?php echo $arr[0]; ?>>Remove</button></td>
					
				</tr>
			<?php 
			 } ?>
			<tr><td></td><td>Total:  <?php echo $count; ?></td></form>
			<form method="post" action="success.php">
				<tr><td><button type="submit" class="btn btn-success" name="confirmorder" value="confirm">Confirm Order</button></a></td></tr>
					
			</form></tbody>

		</table>
	</div>
</div>
</div>


 </body>
 </html>
 <?php }
 else
 {
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
		<p style="text-decoration:bold;">Please login to view your cart</p>
		<a href="login.php"><button class="btn btn-primary">Back</button></a>
	</div>
</div>
</body>
</html>
<?php };
?>
