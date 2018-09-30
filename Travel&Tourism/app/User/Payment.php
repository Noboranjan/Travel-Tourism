<?php
	session_start();
	require "Database.php";

	if($_SESSION['abc']=='321' || $_COOKIE['abc']=="321")
	{
        ?>
<!DOCTYPE html>
<html>

<head>
    <title>User Home</title>
    <link rel="stylesheet" type="text/css" href="../morshina/design/Userstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <script src="../User/lib/jquery-3.3.1.min.js">   
    </script>
    <style>
        *{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
        body{
			background-image:url("../morshina/design/pics/money.jpg");
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
    <script type="text/javascript">
    $(window).on('scroll',function(){
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }
        else {
            $('nav').removeClass('black');
        }
    })
    </script>
</head>

<body>
    <div class="wrapper">
        <nav>
            <UL>
                <li><a href="Home.php">Home</a></li>
                <li><a href="#">Payment</a></li>
                <li><a class="active" href="../morshina/logout.php">Log Out</a></li>
            </UL>
        </nav>
        <section class="content">
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
        </section>
    </div>
</body>

</html>
<?php
        }else{
			header("location: ../login2.php");

	}
        ?>