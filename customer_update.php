<!DOCTYPE HTML>
<html>
<head>
<title>Online Rental Vehicle</title>
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/UserLogin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="icon" href="images/icon.png">
<style>label{color: whitesmoke;}
::-webkit-calendar-picker-indicator {
    filter: invert(1);
}
.wrapper{
	width: 400px;
	height:auto !important;
	background-color: rgb(0,0,0,0.8);
	padding:60px 30px;
	position: static;
	box-sizing: border-box;	
	opacity:1;
	overflow: auto;

}
section{overflow:auto;}</style>


<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:rgb(255, 246, 235)">
<?php
  include 'config.php';

  
  
  session_start();
  $email=$_SESSION["email"];


  $sql = "SELECT * FROM customers WHERE Email='$email'";
  $result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
	<div class="container-fluid">
	  <a class="navbar-brand disabled" href="#">ORV</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarsExample04">
		<ul class="navbar-nav me-auto mb-2 mb-md-0">
		  <li class="nav-item">
			<a class="nav-link active" aria-current="page" href="./index.html">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="./Rates.php">Rates</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="./contactUs.html">Contact Us</a>
		  </li>
		  <li class="nav-item">
			  <a class="nav-link" href="./about us.html">About Us</a>
			</li>
		</ul>
	  </div>
	</div>
  </nav>
  <section>
  <div class=" justify-content-center align-items-center">
  <div class="image">
	<div class="container">
	<div class="wrapper pt-5 mx-31">
		   <h1 class="sign">Let's update your profile</h1>
		   <form class="my-0" action="update_customer.php" target="_self" method="POST" onsubmit="return checkPassword()">
				<input type="text" id="fname" name="fname" placeholder="First Name" value="<?php echo $row['fName'] ?>" required>
				<input type="text" id="lname" name="lname" placeholder="Last Name" value="<?php echo $row['lName'] ?>" required>
				
				<input class="mt-1" type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter Your Number" value="<?php echo $row['mobileNumber'] ?>" required>
				<input type="textarea" id="addr" name="addr"  placeholder="Enter Your Address" value="<?php echo $row['Address'] ?>" required>
				<label>Gender: </label>
				<select  name="gender" id="gender"><option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option><option value="male">Male</option><option value="female">Female</option></select required><br> 
				<div class="mt-3">
				<label class="mb-1">Date Of Birth: </label><input class="" type="date" id="dob" name="dob" value="<?php echo $row['DOB'] ?>"  required>
			</div>
				<div class="mt-3">		
				<label>Password: </label><input type="password" id="pwd" name="pwd" placeholder="" required></div>
				<label>Confirm Password: </label><input type="password" id="rpwd" name="rpwd" placeholder="" required>
		<button class="btn btn-danger rounded-pill col-12 mb-2 mt-2" type="submit" value="LOGIN">Update Your Profile		</button>
		
		   </form>
		 </div>
		</div>
		</div>
	</div>
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

<img src="images/LOGO2.png" width=425px" height="150px" class="logo" style="  padding-top:35px; padding-left:10px; padding-right:250px" align="center">

<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>
<div class="social">
	<a href="#"><img src="images/facebook.png" alt="facebookicon"></a>
	<a href="https://www.twitter.com"><img src="images/twitter.png" alt="twittericon"></a>
	<a href="https://www.instagram.com/the_prince_limbachiya"><img src="images/instagram.png" alt="instagramicon"></a>
	<a href="#"><img src="images/youtube.png" alt="youtubeicon"></a>
</div>
</div>
</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
