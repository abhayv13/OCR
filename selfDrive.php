<?php
session_start();
	$email=$_SESSION['email'];
	$conn=mysqli_connect("localhost","root","","car_rental_system");
	$query="SELECT * FROM customers WHERE (`email`='$email')";
	$res=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($res);
	$CID=$row['customerID'];

?>


<?php
	$VID = $_POST["vehicle"];
	$PDate = $_POST["pickup"];
	$RDate = $_POST["return"];
	
	
	$sql = "insert into rent(VehID,CusID,PDate,RDate)values('$VID','$CID','$PDate','$RDate')";
	
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('Record Inserted Successfully!');window.location='displayBooking.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>