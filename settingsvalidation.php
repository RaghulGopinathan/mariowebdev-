<?php
$con=mysqli_connect("localhost","root","","lifestyle store") or die(mysqli_error($con));
$email=$_POST['email'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$query="SELECT id FROM signup WHERE email='" .$email. "' && password='" .$oldpassword. "'";
$call=mysqli_query($con,$query);
$row=mysqli_num_rows($call);
$arr=mysqli_fetch_array($call);
$id=$arr[0];
if($row==1)
{
	$editquery="UPDATE signup SET password='" .$newpassword. "'WHERE id='" .$id. "'";
	$callquery=mysqli_query($con,$editquery);
	echo "The password has been changed successfully";
}
else{
	echo "Enter the correct email and password combination";
}
?>
<html>
<body>
	<a href="settings.php"><< Back</a>
</body>
</html>
