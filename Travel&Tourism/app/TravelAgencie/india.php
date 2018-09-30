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








<p style="clear:right"><h3>Gateway of India(Mumbai):</h3></p>

<div class="clearfix">
<img class="img2" src="gateway.jpg" alt="gateway" width="230" height="130">
The Gateway of India is a monument built during the British Rule in Mumbai City of Maharashtra state in Western India.It is located on the waterfront in the Apollo Bunder area in South Mumbai and overlooks the Arabian Sea. The structure is a basalt arch, 26 metres  high. It lies at the end of Chhatrapati Shivaji Marg at the water's edge in Mumbai Harbour. It was a crude jetty used by the fishing community which was later renovated and used as a landing place for British governors and other prominent people. In earlier times, it would have been the first structure that visitors arriving by boat in Mumbai would have seen. The Gateway has also been referred to as the Taj Mahal of Mumbai,and is the city's top tourist attraction.The India Gate in New Delhi is similar to the Gateway of India in Mumbai. The structure was erected to commemorate the landing of King George V and Queen Mary at Apollo Bunder, when they visited India in 1911. Built in Indo-Saracenic style, the foundation stone for the Gateway of India was laid on 31 March 1911. The final design of George Wittet was sanctioned in 1914 and the construction of the monument was completed in 1924. The Gateway was later the ceremonial entrance to India for Viceroys and the new Governors of Bombay. It served to allow entry and access to India.</div><br/><br/>




<p style="clear:right"><h3>

Victoria Memorial(Kolkata):</h3></p>
<div class="clearfix">
<img class="img2" src="Victoria-Memorial-1.jpg" alt="Victoria-Memorial-1" width="230" height="130">
The Victoria Memorial (Victoria Memorial Hall of fame)a large marble building in Kolkata(Calcutta).The total cost for the construction of this monument amounted to 1 Crore, 5 Lakh rupees. This amount was funded by many Indian states, individuals of the British Raj and the British government in London.The Victoria Memorial has 25 galleries, which include the royal gallery, the national leaders gallery, the portrait gallery, central hall, the sculpture gallery, the arms and armory gallery and the newer, Calcutta gallery. The gardens cover an area of 64 acres and are maintained by a team of 21 gardeners. The Victoria Memorial Hall is one of the most iconic landmarks which Kolkata is famous for. Dedicated to Queen Victoria, the memorial (which is now a museum), was built using a combination of English and Mughal design. </div><br/><br/>
<br/>


<p style="clear:right"><h3>

Howrah Bridge(West Bengal):</h3></p>

<div class="clearfix">
<img class="img2" src="hawra.jpg" alt="hawra" width="230" height="130">
 Howrah Bridge is a cantilever bridge with a suspended span over the Hooghly River in West Bengal, India. Commissioned in 1943, the bridge was originally named the New Howrah Bridge, because it replaced a pontoon bridge at the same location linking the two cities of Howrah and Kolkata . On 14 June 1965 it was renamed Rabindra Setu after the great Bengali poet Rabindranath Tagore, who was the first Indian and Asian Nobel laureate. It is still popularly known as the Howrah Bridge.The bridge is one of two on the Hooghly River and is a famous symbol of Kolkata and West Bengal. The other bridges are the Vidyasagar Setu , the Vivekananda Setu, and the newly built Nivedita Setu. It weathers the storms of the Bay of Bengal region, carrying a daily traffic of approximately 100,000 vehicles and possibly more than 150,000 pedestrians,easily making it the busiest cantilever bridge in the world. The third-longest cantilever bridge at the time of its construction, the Howrah Bridge is the sixth-longest bridge of its type in the world..</div>
<br/>


































</body>
</html>


<?php
     }else{
		header("location: ..\login2.php");

	}
?>