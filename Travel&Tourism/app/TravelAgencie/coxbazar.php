<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>

!DOCTYPE html>
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
<!--</style>
<head>
<style>
img {
    float: left;
}

</style>-->



<style>
div {
    border: 0px solid black;
    padding: 2px;
}


.clearfix {
    overflow: auto;
	margin: 0 80px;
}

.img2 {
	margin-right:10px;
    float: left;
}
h3{
	margin-left:80px;
}
</style>





<body>
<div class="w3-top" style="position:relative!important;top:-25px;padding:0">
  <div class="w3-bar w3-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  
	<a href="home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="ind.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"> Package</a>
    <a href="packagetype.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tour Type</a>
    <a href="attraction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Attraction</a>
  
	    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">profile</a>
		    
			  <a href="oticket.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">online Ticket</a>
			    <a href="payment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Payment</a>
				  <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
				   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">logout</a>
  </div>

  
</div>








<p style="clear:right"><h3>Inani Beach:</h3></p>

<div class="clearfix">
<img class="img2" src="inani.jpg" alt="inani" width="230" height="130">
Inani Beach  is an 18-kilometre-long  sea beach in Ukhia Upazila of Cox'sBazar District,Bangladesh. It has a nice view having a lot of coral stone. This coral stones look green and live in summer or in rainy season. But if someone want to enjoy to look a lot of coral stone then one should go there in winter.</div><br/><br/>




<p style="clear:right"><h3>Ramu:</h3></p>
<div class="clearfix">
<img class="img2" src="ramu.jpg" alt="ramu" width="230" height="130">
Ramu is a village in Bangladesh located on the Baghkhali River. It is located approximately ten miles from Cox's Bazar, between Cox's Bazar and Chittagong. Ramu has pagodas, Buddhist monasteries, and a bronze Buddha statue that is 13-feet in height. </div><br/><br/>
<br/>


<p style="clear:right"><h3>Himchari Waterfall:</h3></p>

<div class="clearfix">
<img class="img2" src="Himchari.jpg" alt="Himchari" width="230" height="130">
There are Many places to visit for the tourists in Cox’s Bazar. One of them is Himchari. Himchari is famous for warm water waterfall.The wanderfill waterfall of Himchari is a very attractive scene.The waterfall from the green hill is relatively marvelous to look at. Whatever, in the winter it Quails. In the rainy season in it is really marvelous and full waterfall could be enjoyed.The place is best for picnic,photo shooting, relaxing and sunbathing. Here you get beautiful hilltop resort centre where you can stay for relaxing and can enjoy the shore of the Bay of Bengal.This place is about 18 km south from Cox’s Bazar town. Anyone can use Auto Rickshaw or rickshaw Chander Gari to go there. It's Marine Drive roadway is a enjoyable roadway for the tourists..</div>
<br/>


































</body>
</html>


<?php
     }else{
		header("location: ..\login2.php");

	}
?>