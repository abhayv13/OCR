<!DOCTYPE HTML>
<html>
<head>

<title>Online Rental Vehicle</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/view_customer.css">  
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>.wrapper{
	font-size:30px;
	color:black;
	opacity:0.9;
	background-color: #f7a727;
	width: 900px;
	height: auto;
	padding:20px;
	margin: 25px auto 0;
	border-top: 5px solid #0f0f0f;
	box-shadow: 0 0 3px rgba(0,0,0, alpha);
}
section{
  overflow: auto;
}</style>

<link rel="icon" href="images/icon.png">
	<script src="js/editpro.js"> </script>	

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">

</head>
<body style="background-color:rgb(255, 246, 235)" >
<?php
include 'config.php';
session_start();
$uemail=$_SESSION["email"];
  $sql = "SELECT * FROM customers WHERE Email='$uemail'";
  $result = mysqli_query($conn, $sql);
  $row= mysqli_fetch_array($result);
  ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
     <div class="container-fluid">
       <a class="navbar-brand disabled" href="#">ORV</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
 
       <div class="collapse navbar-collapse" id="navbarsExample04">
         <ul class="navbar-nav me-auto mb-2 mb-md-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">My Profile</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./rent.php">Rent Now</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./displayBooking.php">My Rents</a>
           </li>
          
         </ul>
       </div>
     </div>
   </nav>


<style>

.sidebar1 {
  margin: 0;
  padding: 0;
  width: 230px;
  background-color: black;
  position: absolute;
  border:1px solid orange;
  border-bottom:none;
  overflow: auto;
}

.sidebar1 a {
  display: block;
  color: yellow;
  padding: 16px;
  text-decoration: none;
  border-bottom:1px solid orange;
}
 
.sidebar1 a.active {
  background-color:  #2196f3;
  color: white;
}

.sidebar1 a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar1 {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar1 a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar1 a {
    text-align: center;
    float: none;
  }
}

</style>

<section>
<div class="contact">
<center><font >Welcome <?php echo $row['fName'] ?>!!! </font></center>
</div>



<div class="wrapper">
<img src="images/avatar.png" width="150" height="150"  style="border-radius:100px"><br><br>
Customer ID : <?php echo $row['customerID'] ?><br><br>
First Name : <?php echo $row['fName'] ?><br><br>
Last Name  : <?php echo $row['lName'] ?><br><br>
Gender : <?php echo $row['gender'] ?><br><br>
Mobile Number : <?php echo $row['mobileNumber'] ?><br><br>
E-mail : <?php echo $row['Email'] ?><br><br>
Date of Birth : <?php echo $row['DOB'] ?><br><br>
Address : <?php echo $row['Address'] ?><br><br>

<center>
<a href="customer_update.php" class="btn btn-success rounded-pill col-5 py-1">Update Your Profile</a>
<a href="delete customer.html" class="btn btn-danger rounded-pill col-5 py-1">Delete Your Profile</a>
<a href="logout.php" class="btn btn-secondary rounded-pill col-5 py-1 mt-3">Logout</a>

<center>
</div>

<br>
<br>
</section>

<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#"></a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="terms.html">TERMS & CONDITIONS</a></h5>
<h5><a href="testimonials.html">TESTIMONIALS</a></h5>
</div>

<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="Rates.php">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
</div>

<img src="./images/LOGO2.png" width="170px" height="170px" class="logo" style="padding-top:15px; padding-left:10px; padding-right:230px;" align="center">

<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>


<div class="social">
<a href="#"><img src="images/facebook.png" alt="facebookicon"></a>
<a href="https://www.twitter.com/iriteshmishra"><img src="images/twitter.png" alt="twittericon"></a>
<a href="https://www.instagram.com/virat.kohli"><img src="images/instagram.png" alt="instagramicon"></a>
<a href="#"><img src="images/youtube.png" alt="youtubeicon"></a>
</div>
</div>
</div>
</footer>
<h5 align="center" style="font-family:'Poppins', sans-serif"><font color="white">Copyright 2022 © Ritesh Mishra. All Rights Reserved.</font></h5>
</body>





