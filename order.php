<?php

$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$name=$_POST['cart'];
$query="SELECT * FROM PRODUCT WHERE id='" .$name. "' ";
$call=mysqli_query($con,$query);
$val=mysqli_fetch_array($call);
if($val>0)
{
	$itemname=$val[1];
	$itemprice=$val[2];
}

?>