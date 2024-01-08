<?php

session_start();
$email=$_SESSION['email'];
$pass=$_POST['pass'];


	$conn=mysqli_connect("localhost","root","","car_rental_system");
	$que1 = "DELETE FROM customers where ((`Email` = '$email') AND (`pass`='$pass'))"; 
	$res=mysqli_query($conn,$que1);
	
	
		echo "<script>alert('Deleted Successfully! Register Again to Login '); window.location='Login_customer.php';</script>";

?>