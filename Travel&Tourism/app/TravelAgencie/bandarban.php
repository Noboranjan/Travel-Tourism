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








<p style="clear:right"><h3>Nilgiri Hill Resort:</h3></p>

<div class="clearfix">
<img class="img2" src="nilgiri2.jpg" alt="nilgiri2" width="230" height="130">
Surrounded by beautiful hilly natural views and clouds most of the time. An esthetic place for enjoying serenity with ultimate relaxation away from city boredom.You will find yourself in the embrace of the clouds. Its located in Thansi Upozilla in Bandarban district which is lies 48 km away from the Bandarban town. There is beautiful resort in the top of the mountain maintained by Bandarban Officers Club sister concern of Bangladesh Army . Booking is done through 69 Infantry Brigade Headquarters in Bandarban Cantoment. There are five well furnished cottages ranging from Tk.5000-12000. </div><br/><br/>




<p style="clear:right"><h3>
Boga Lake:</h3></p>
<div class="clearfix">
<img class="img2" src="Boga.jpg" alt="Boga" width="230" height="130">
Boga Lake is the most beautiful natural lake in Bangladesh. It is also known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in Bandarban. The area of this lake is about 15 acres. It is about 3000 feet above sea level. The color of water of this lake is blue and very nice. There are many mythological stories behind the creation of this lake. There are many tourists make their way to Boga lake every year, specially in the winter season. Small tribe community like Bawm, Khumi have localities besides the Boga lake. In the rainy season, it is quite difficult to stroll beside the boga lake. The road from Ruma to Boga lake is still under construction. There waiting lots of pleasure and delight for you at Boga lake. You will definitely be amazed looking at the big rocks lying in and out of the Boga lake. You can have a camp fire beside the lake, that will be unbelievable and mind-blowing memory in your life. </div><br/><br/>
<br/>


<p style="clear:right"><h3>
Nafakhum Falls:</h3></p>

<div class="clearfix">
<img class="img2" src="nafakum.jpg" alt="nafakum" width="230" height="130">
 Nafa-khum is a waterfall in Bangladesh on the Sangu River. It is among the largest waterfalls in the country by volume of water falling. The wild hilly river Sangu suddenly falls down here about 25–30 feet.The falls are located in a remote area three hours' walking distance from Remakri, Thanchi Upazila, Bandarban District. Remakri is located three hours by boat on the Sangu River from Tindu, which is itself three hours by boat from Thanchi. Nafa-khum is not very popular as a tourist destination.The word "Khum" in Marma language means "Waterfall". A special type of flying fish, whose local name is nating, is found at the bottom in a small cave as they swim against the stream but cannot jump over the height of the fall.</div>
<br/>


































</body>
</html>


<?php
     }else{
		header("location: ..\login2.php");

	}
?>