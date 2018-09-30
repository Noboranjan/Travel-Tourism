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








<p style="clear:right"><h3>
Durbar Square:</h3></p>

<div class="clearfix">
<img class="img2" src="patan-durbar-square.jpg" alt="dsqure" width="230" height="130">
 Durbar Square is the generic name used to describe plazas and areas opposite the old royal palaces in Nepal. It consists of temples, idols, open courts, water fountains and more. </div><br/><br/>




<p style="clear:right"><h3>

Annapurna Circuit:</h3></p>
<div class="clearfix">
<img class="img2" src="annapurna-circuit-trek.jpg" alt="annapurna-circuit" width="230" height="130">
The Annapurna Circuit is a popular name for a trek within the Annapurna mountain range of central Nepal.The total length of the route varies between 160–230 km , depending on where the motor transportation is used and where the trek is ended. The trek rises to an altitude of 5,400m on the Thorung La pass, touching the edge of the Tibetan plateau. This trek crosses two different river valleys and encircles the Annapurna massif, crossing Thorung La, the highest pass on this trek. Practically all trekkers hike the route counter clockwise, as then the daily altitude gain is slower and crossing the high Thorong La pass is easier and safer.The mountain scenery, seen at close quarters includes the Annapurna Massif, Dhaulagiri, Machhapuchhre, Manaslu, Gangapurna and Tilicho Peak. Numerous peaks of 6000-8000m in elevation rise from the Annapurna range.</div><br/><br/>
<br/>


<p style="clear:right"><h3>
Davis Falls:</h3></p>

<div class="clearfix">
<img class="img2" src="davis-fall (1) copy.jpg" alt="davis-fall" width="230" height="130">
Davis Falls is a waterfall located at Pokhara in Kaski District, Nepal.The water forms an underground tunnel after reaching the bottom. This tunnel is approximately 500 feet and runs 100 feet below ground level. On 31 July 1961, a Swiss couple Davi went swimming but the woman drowned in a pit because of the overflow. Her body was recovered 3 days later in river Phusre. Her father wished to name it "Davi's falls" after her. Its Nepali name is Patale Chango, which means "underworld waterfall".After exiting the tunnel, the water passes through a cave called Gupteshwor Mahadev or "cave beneath the ground". The Phewa Lake dam is the water source.It is an attraction for tourists and locals. Thousands of Nepalis visit for recreation and enjoyment.</div>
<br/>


































</body>
</html>

<?php
     }else{
		header("location: ..\login2.php");

	}
?>