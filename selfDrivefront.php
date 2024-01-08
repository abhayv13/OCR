<!DOCTYPE HTML>
<html>
<head>
<title>Online Rental Vehicle</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<link rel="stylesheet" type="text/css" href="styles/UserLogin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>.wrapper{
	width: 400px;
	height:auto !important;
	background-color: rgb(0,0,0,0.8);
	/* top: 300px;
	left: 50%; */
	padding:60px 30px;
	position: static;
	/* transform: translate(-50%,-50%); */
	box-sizing: border-box;	
	/* box-shadow: 8px 8px 50px #000; */
	opacity:1;
	overflow: auto;
	
	
}
label{color: whitesmoke;}
::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

section{
   overflow:auto;
}
.hidden{
  visibility: hidden;
}
</style>


<link rel="icon" href="images/icon.png">

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:rgb(255, 246, 235)">
<?php
  session_start();
  $email=$_SESSION['email'];
  $vehicle=$_GET['vehicle'];
?>
<!-- <div style="background-color:orange; width:100%; height:195px; padding-bottom:20px">
   <a href="index.html"><img src="images/LOGO11.png" width = "190" height = "150" class = "logo" style="padding-top:18px; padding-left:5px" align = "left"></a>
<div style="padding-top: 1px; padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>Online Rental Vehicle</b></h1></center>
<p style="position: relative; text-align:right; width:111%; font-size:18px"><a href="Login_customer.php" style="text-decoration:none">LOG OUT </a></p>
</header>
</div>
</div> -->
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
         <!-- <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Action</a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
           </ul>
         </li> -->
       </ul>
       <!-- <form role="search">
         <input class="form-control" type="search" placeholder="Search" aria-label="Search">
       </form> -->
     </div>
   </div>
 </nav>

<br>
<section>
<div class="wrapper ">
   <h1 class="sign">Sign in</h1>
  <form class="my-0" action="selfDrive.php" method="post">
    <div class="hidden">
      <input type="hidden" name="vehicle" id="vehicle" value="<?php echo $vehicle ?>">

    </div>
   <div class="mt-3">
      <label class="mb-1">Pick Up date: </label><input class="" type="date" id="pickup" name="pickup" value=""  required>
   </div>     
   <div class="mt-3">
      <label class="mb-1">Return Date: </label><input class="" type="date" id="return" name="return"  value="" required>
   </div>      <button class="btn btn-danger rounded-pill col-12 mb-2 mt-2" type="submit" value="submit">Book Now		</button>

  </form>
  
  <!-- <div class="socials">
       <a href="#"><i class="facebook"></i></a>
      <a href="#"><i class="twitter"></i></a>
      <a href="#"><i class="pinterest"></i></a>
      <a href="#"><i class="linkedin"></i></a>
  </div> -->
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
