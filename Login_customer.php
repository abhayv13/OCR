<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/UserLogin.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style></style>

<link rel="icon" href="images/icon.png">
<style>.wrapper{
	width: 400px;
	height:auto !important;
	background-color: rgb(0,0,0,0.8);
	top: 300px;
	left: 50%;
	padding:60px 30px;
	margin-bottom:10px;
	position: relative;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	box-shadow: 8px 8px 50px #000;
	opacity:1;
	
}</style>

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">

</head>
<body style="background-color:rgb(255, 246, 235)">
<!-- <div style="background-color:orange; width:100%; height:176px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width = "192" height = "192" class = "logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align = "left"></a>
<div style="padding-top: 1px; padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>Ritesh Rent-a-Car</b></h1></center>
<p style="position:relative; text-align:right; width:111%; font-size:18px"><a href="register.html" style="text-decoration:none">REGISTER</a></p>
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

<div class="image">
  <div class="wrapper ">
	     <h1 class="sign">Sign in</h1>
		 <form class="my-0" action="loginback.php" method="post">
		      <input type="text" name="email" placeholder="Email">
			  <input type="password" name="pass" placeholder="Password">
			  <button class="btn btn-danger rounded-pill col-12 mb-2 mt-2" type="submit" value="LOGIN">Login		</button>
			  <a href="./customer_registration.html" class="btn btn-link rounded-pill col-12" >New User Registeration		</a>	  
	  
		 </form>
		 
		 <!-- <div class="socials">
		      <a href="#"><i class="facebook"></i></a>
			  <a href="#"><i class="twitter"></i></a>
			  <a href="#"><i class="pinterest"></i></a>
			  <a href="#"><i class="linkedin"></i></a>
		 </div> -->
      </div>
      <!-- <div id="overlay-area"></div> -->
	  </div>

<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#"></a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="terms.html">TERMS AND CONDITIONS</a></h5>
<h5><a href="testimonials.html">TESTIMONIALS</a></h5>
</div>

<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="Rates.php">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
</div>

<img src="images/LOGO12.png" width = "170px" height = "170px" class = "logo" style="padding-top:15px; padding-left:10px; padding-right:230px" align = "center">


<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>
<div class="social">
<a href="#"><img src="images/facebook.png" alt="facebookicon"></a>
<a href="https://www.twitter.com/iriteshmishra"><img src="images/twitter.png" alt="twittericon"></a>
<a href="https://www.instagram.com/virat.kohli"><img src="images/instagram.png" alt="instagramicon"></a>
<a href="#"><img src="images/youtube.png" alt="youtubeicon"></a>
</div>
</div>
</footer>
</body>