
<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>







<!DOCTYPE html>



<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
<style>
* {
    box-sizing: border-box;
}


.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 780px; 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>


</head>


<title>Tour info</title>



<style>

table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
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
			   <!-- <a href="payment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Payment</a>-->
				  <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
				   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">logout</a>
  </div>

  
</div>


  
</div><br/><br/><br/>






<div class="row">
  <div class="column" style="background-color:#aaa;">

	<p>Click on a Route  or Destination to display Tour information.</p>
    <table id="demo"></table>   
  </div>
  <div class="column" style="background-color:#bbb;">

    <h2>The inner details of any package:</h2><br/><br/><br/><br/><br/><br/><br/><br/>
    <p id='showTour'></p>
  </div>
</div>



<footer class="w3-container w3-padding-64 w3-center w3-opacity">  

 
 <p>Copyright@2018</p>
 
</footer>

<script>
var x,xmlhttp,xmlDoc
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "tour_catalog.xml", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML; 
x = xmlDoc.getElementsByTagName("Tour");
table="<tr><th>Route</th><th>Destination</th></tr>";
for (i = 0; i <x.length; i++) { 
  table += "<tr onclick='displayTour(" + i + ")'><td>";
  table += x[i].getElementsByTagName("Route")[0].childNodes[0].nodeValue;
  table += "</td><td>";
  table +=  x[i].getElementsByTagName("Destination")[0].childNodes[0].nodeValue;
  table += "</td></tr>";
}
document.getElementById("demo").innerHTML = table;

function displayTour(i) {
  document.getElementById("showTour").innerHTML =
  "Route: " +
  x[i].getElementsByTagName("Route")[0].childNodes[0].nodeValue +
  "<br>Destination: " +
  x[i].getElementsByTagName("Destination")[0].childNodes[0].nodeValue +
  "<br>Place: " + 
  x[i].getElementsByTagName("Place")[0].childNodes[0].nodeValue;
}


</script>

</body>
</html>

<?php
     }else{
		header("location: ..\login2.php");

	}
?>