<?php

$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$remval=$_POST['remove'];
$deletequery="DELETE FROM cart WHERE id='" .$remval. "'";
$calldeletequery=mysqli_query($con,$deletequery);
header('location:cart.php');
?>
