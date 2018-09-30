<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>
<!DOCTYPE html>



<html>
<title>Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>


<div class="w3-top" style="position:relative!important">
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


<header class="w3-container w3-blue w3-center" style="padding:128px 16px">
  <img src="test2.jpg" weight="800" height="400"  />
  <h1 class="w3-margin w3-jumbo">Travel & tourism</h1>
  <p class="w3-xlarge"></p>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Introduction</h1>
      <h5 class="w3-padding-32">Bangladesh is a beautiful country of South Asia. Within it are primeval swamps full of man-eating tigers, the unseen relics of long-forgotten Buddhist kingdoms, lush and lurid tea plantations, tribal groups with Burmese faces, glorious beaches that stretch for eternity, freshwater dolphins and deep-water whales, and some of the most open-hearted people you’ll ever meet.</h5>

      <p class="w3-text-grey"></p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-blue"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-blue w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>wait!!!!</h1>
      <h5 class="w3-padding-32">Don't panic,be seated & have a cup of tea</h5>

      <p class="w3-text-grey">On this website, you will get information about the best Bangladesh tour packages, Bangladesh tourist attractions, best Bangladesh travel tips from the experts, and more to make your Bangladesh travel a breeze. Have a nice holiday in Bangladesh!</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Copyright@2018 Noboranjan</h1>
</div>


<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 

 
 
</footer>

<script>

function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
<?php
     }else{
		header("location: ..\login2.php");

	}
?>
