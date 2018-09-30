<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>

<!DOCTYPE html>
<html>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Payment Form</title>
	<style type="text/css" media="screen">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: helvetica;
		}
		body{
			background-image:url("money.jpg");
		}
		.main{
			width: 500px;
			margin: 50px auto;
			background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.6;
            filter: alpha(opacity=60);
			border: 2px solid black;
			
			
		}
		.info{
			width: 100%;
			background-color: green;
			padding: 7px;
			text-shadow: 1px 1px 1px #222;
			color: #fff;
			font-size: 20px;
		}
		.form-box{
			padding: 20px;
			background-color: #eee;
		}
		label{
			color: navy;
			font-size: 18px;
		}
		.inp,.msg-box{
			width: 100%;
			padding: 10px;
			margin-top: 4px;
			margin-bottom: 5px;
			border-radius: 5px;
			border: 2px solid green;
			font-weight: bold;
			color: green;
			border-right: 15px solid green;
			border-left: 15px solid green;
			resize: none;
		}
		.msg-box{
			height: 80px;
		}
		.inp:focus,.msg-box:focus{
			outline: none;
			border: 2px solid navy;
			border-right: 15px solid navy;
			border-left: 15px solid navy;
		}
		.sub-btn{
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
			border: none;
			background: linear-gradient( green,green);
			cursor: pointer;
			color: white;
			font-size: 20px;
			text-shadow: 1px 1px 1px white;
		}
		.sub-btn:hover{
			background: linear-gradient(lightgreen,green);
			opacity: 0.8;
			transition: all ease-out 0.2s;
		}
		.sub-btn:focus{
			outline: none;
		}
		@media(max-width: 720px){
			.main{
				width: 90%;
			}
		}
	</style>
</head>
<body>

<div class="w3-top" style="position:relative!important">
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


  
</div><br/>
	<div class="main">
		<div class="info">PaymentForm:</div>
		<form action="insert.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			<label for="phone">Phone</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			<label for="aname">Agency Name</label><br>
			<input type="text" name="aname" class="inp" placeholder="Enter Agency name" required><br>
			<label for="destination">Destination</label><br>
			<input type="text" name="destination" class="inp" placeholder="Enter Destination" required><br>
				<label for="phone">Bkash/Rocket No</label><br>
			<input type="tel" name="brno" class="inp" placeholder="Enter Bkash/Rocket No" required><br>
				<label for="tid">Transaction ID</label><br>
			<input type="tel" name="tid" class="inp" placeholder="Enter Transaction ID" required><br>
			
			
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
</body>
</html>


<?php
     }else{
		header("location: ..\login2.php");

	}
?>