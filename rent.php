<?php
	include_once 'config.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Online Rental Vehicle</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<link rel="stylesheet" type="text/css" href="styles/tablestyles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="icon" href="images/icon.png">

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:rgb(255, 246, 235" class="">
<!-- <div style="background-color:orange; width:100%; height:195px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width = "185" height = "185" class = "logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align = "left"></a>
<div style="padding-top: 1px; padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>Ritesh Rent-a-Car</b></h1></center>
<p style="position: relative; text-align:right; width:110%; font-size:18px"><a href="loginAs.html" style="text-decoration:none">LOG IN </a> | <a href="register.html" style="text-decoration:none">REGISTER</a></p>
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
             <a class="nav-link active" aria-current="page" href="./validate_customer.php">My Profile</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./Rent.php">Rent Now</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./displayBooking.php">My Rents</a>
           </li>
           <!-- <li class="nav-item">
               <a class="nav-link" href="./about us.html">About Us</a>
             </li> -->
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

   <div>
   <div class="p-5 text-center bg-body-tertiary rounded-3" style="background-color:rgb(255, 246, 235)!important">
     <img src="./images/LOGO2.png" class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="125" height="100"></svg>
     <h1 class="text-body-emphasis">Rent Now </h1>
     <p class="col-lg-8 mx-auto fs-5 text-muted">
			We have all types of cars at very affordable rates. you will never be disappointed
	</p>
     <!-- <div class="d-inline-flex gap-2 mb-5">
       <button class="d-inline-flex align-items-center btn btn-danger btn-lg px-4 rounded-pill" type="button">
         Sign Up 
       </button>
       <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
         Get Rates
       </button>
     </div> -->
   </div>
   <!-- <div class="container col-12 align-items-center justify-content-center">
<div id="carouselExampleIndicators" class="carousel slide" style="border-radius: 10px!important;">
     <div class="carousel-indicators">
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="./images/car1.png" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="./images/car2.png" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="./images/car3.png" class="d-block w-100" alt="...">
       </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>
</div>
<div class="container">

<div class="slideshow-container">


</div>



<div class="">
	<br><hr><br>
	<p>Not only are our vehicles and service of top quality, we also believe in providing a India rent a car service at competitive rates. Since we have a wide range of rates for different kinds of vehicles, our prices are affordable to everyone ranging from budget / economy to luxury.</p>

	<p>Special discounts are also given on long time hires and in case of large mileages in a few days.</p>
	<p>All the rates are given in Indian Rupees.We also accept MasterCard, paypal,paytm, Visa credit cards,and cheques.</p>
</div>
</div>

<div class="BoxesRate">

	<div class="columnRate">
		<div class="cardRate">
			<img src="images/img10.jpg" width = "100%" height = "160">
			<h2>SELF DRIVE RATES</h2>
			<p>A quick look at the self drive rates offered by us</p>
			
		</div>
	</div>
	
	<div class="columnRate">
		<div class="cardRate">
			<img src="images/img11.jpg" width = "100%" height = "160">
			<h2>WITH DRIVER RATES</h2>
			<p>Should you want to tour around the country with ease we will gladly assist you in selecting a wide variety of cars with driver</p>
			
		</div>
	</div>

</div> -->
<center>
	


<div class="container mx-auto mt-4">
	<?php
	$conn=mysqli_connect('localhost','root','','car_rental_system');
	$query="SELECT * FROM vehicles";
	$res=mysqli_query($conn,$query);
	
	while($row=mysqli_fetch_array($res)){
?>
<div class="row">
    <div class="col-md-4 ">
      <div class="card px-1 py-1 mx-2 my-2" style="width: 18rem;">
  <img src="./images/img06.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["Name"]?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Per Week Cost: <?php echo $row["Per_Week"] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted">Per Month Cost: <?php echo $row["Per_Month"] ?></h6>
        <h6 class="card-subtitle mb-2 text-muted">Excess Mileage: <?php echo $row["Excess_Mileage"] ?></h6>
        <?php $vehicle= $row["ID"] ?>
        <a class="btn btn-danger rounded-pill col-12" href='selfDrivefront.php?vehicle=<?php echo $row["ID"] ?>'>Rent Now</a>
   
       <!-- <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
    <a href="#" class="btn "><i class="fab fa-github"></i> Github</a> -->
  </div>
  </div>
    </div></div><?php 
	
}
	
	
	?>


	
	








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
			
</body>



</html>


