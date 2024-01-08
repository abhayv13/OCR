<?php

include 'config.php';
session_start();
$email=$_SESSION['email'];



	
	$que = "UPDATE customers SET fName = '$_POST[fname]', lName = '$_POST[lname]', gender = '$_POST[gender]', mobileNumber = '$_POST[phone]', Email = '$email', Address = '$_POST[addr]', DOB = '$_POST[dob]', pass = '$_POST[pwd]', rpass = '$_POST[rpwd]' where Email = '$email' "; 
	
	$res=mysqli_query($conn, $que);
	
		echo "<script>alert('Updated Successfully! Please Login Again');  </script>";

	


?>
<script>window.location='Login_customer.php';</script>

