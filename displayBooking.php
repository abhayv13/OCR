<?php
	include_once 'config.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Online Vehicle Rental</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link rel="stylesheet" type="text/css" href="styles/stylesss.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/tablestyles.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<link rel="icon" href="images/icon.png">
<style>
html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: auto;
}

.card {
  border-radius: .5rem;
}
</style>


<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<script src="js/JavaScript.js"></script>

</head>
<body style="background-color:rgb(255, 246, 235)">
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


<br>
<?php
			
			
			$sql = "select * from rent,vehicles WHERE (rent.vehID = vehicles.ID)";
			$result = $conn->query($sql);
			
		
				
			
			?>



<section class="">
	<div>
<div class="d-flex align-items-center justify-content-center h-100" style="background-color: rgb(255, 246, 235);">
      <div class="container col-12 justify-content-center">
		<h3><u><b>My Rent History</b></u></h3>
		<br><hr><br>
        <div class="row justify-content-center col-12">
          <div class="col-12">
            <div class="card col-12">
              <div class="card-body col-12">
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Weekly Rate</th>
                        <th scope="col">Monthly Rate</th>
                        <th scope="col">Excess Mileage</th>
                        <th scope="col">Pickup Date</th>
                        <th scope="col">Return Date</th>
                      </tr>
                    </thead>
                    <tbody>
                     
						<?php while($row=$result->fetch_assoc()){?>
							<tr>
							<th scope="row"><?php echo $row['Name'] ?></th>
                        <td><?php echo $row['Per_Week'] ?></td>
                        <td><?php echo $row['Per_Month'] ?></td>
                        <td><?php echo $row['Excess_Mileage'] ?></td>
                        <td><?php echo $row['PDate'] ?></td>
                        <td><?php echo $row['RDate'] ?></td>
                      </tr>	
					
				<?php }  ?>
                       
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>			
			
			




<br>
<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
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

<img src="./images/LOGO2.png" width="400px" height="170px" class="logo" style="  padding-top:15px; padding-left:10px; padding-right:230px" align="center">

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
<h5 align="center"><font color="white">Copyright 2022 © Ritesh Mishra. All Rights Reserved.</font></h5>
</body>



</html>


