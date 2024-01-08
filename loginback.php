<?php
  include 'config.php';

  $uemail = $_POST['email'];
  $pwd = $_POST['pass'];
  session_start();
  $_SESSION["email"]=$uemail;


  $sql = "SELECT * FROM customers WHERE Email='$uemail' AND pass='$pwd'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if ($row){
?>
<script>window.location='validate_customer.php';</script>
<?php
    
} 
else {
    echo "<script>alert('Your username or password is incorrect!'); window.location='Login_customer.php';</script>";
}
?>