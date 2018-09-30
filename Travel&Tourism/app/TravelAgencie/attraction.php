<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>







<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}

</style>


    <title>Attracttive Places</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <div class="w3-top" style="position:relative!important;top:-55px">
  <div class="w3-bar w3-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   
	<a href="home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="ind.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"> Package</a>
    <a href="packagetype.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tour Type</a>
    <a href="attraction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Attraction</a>
   
	    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">User Payment info</a>
		    
			  <a href="oticket.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">online Ticket</a>
			    <!--<a href="payment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Payment</a>-->
				  <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
				   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">logout</a>
  </div>

  
</div>




    <div class="container">

      <h1 class="my-4">Attractive Places 
        <small>of Domestic & International Spots</small>
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="Sylhet-Division2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="sylhet.php">Sylhet</a>
              </h4>
              <p class="card-text"> It is the administrative seat of Sylhet Division. The city is located on the right bank of the Surma River in northeastern Bengal. It has a subtropical climate and lush highland terrain. The city has a population of more than half a million .</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="coxsbazar.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="coxbazar.php">Cox's Bazar</a>
              </h4>
              <p class="card-text">Cox's Bazar Town was constituted in 1869, eventually becoming a B-grade municipality in 1989. Located along the Bay of Bengal in South Eastern Bangladesh, Cox's Bazar Town is a health resort. But it is famous mostly for its long natural sandy beach. The municipality covers an area of 6.85 km2 (2.64 sq mi) with 27 mahallas and 9 wards and has a population of 51,918.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="bandarban2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="bandarban.php">Bandarban</a>
              </h4>
              <p class="card-text">Bandarban is a district in South-Eastern Bangladesh, and a part of the Chittagong Division. It is one of the three hill districts of Bangladesh and a part of the Chittagong Hill Tracts. Bandarban (4,479 km²) is not only the most remote district of the country, but also is the least populated (population 292,900) one.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="tajmahal.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="india.php">India</a>
              </h4>
              <p class="card-text">India (Bharat), also called the Republic of India  is a country in South Asia. It is the seventh-largest country by area, the second-most populous country (with over 1.2 billion people), and the most populous democracy in the world.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="nepal.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="nepal.php">Nepal</a>
              </h4>
              <p class="card-text">Nepal is a landlocked country in South Asia. It is located mainly in the Himalayas but also includes parts of the Indo-Gangetic Plain. With an estimated population of 26.4 million, it is 48th largest country by population and 93rd largest country by area.</p>
            </div>
          </div>
        </div>
        
      </div>


    
      

    </div>
   

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Travell & Tourism 2018</p>
      </div>
     
    </footer>

 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


<?php
     }else{
		header("location: ..\login2.php");

	}
?>
