<?php
	session_start();
	require "Database.php";

	if($_SESSION['abc']=='321' || $_COOKIE['abc']=="321")
	{
       
		$username = $_SESSION['user'];
		$conn= DBConnection();
		$sql= "SELECT * from user where Username = '$username'";
		
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			
		$password =$row['Password'];
		$name = $row['Name'];
		$email = $row['Email'];
		$DateofBirth = $row['DateofBirth'];
		$gender =$row['Gender'];
        $img =$row['Image'];
        
	    }

	}else{
			header("location: ../login2.php");

	}
	
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Home</title>
    <link rel="stylesheet" type="text/css" href="../morshina/design/Userstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <script src="../User/lib/jquery-3.3.1.min.js">
    </script>
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
            <div class="logo">Welcome <?php echo"$username";?></div>
            <UL>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Payment.php">Payment</a></li>
                <li><a class="active" href="../User/logout.php">Log Out</a></li>
            </UL>
        </nav>
        <section class="sec1"></section>
        <section class="content">
        <p>Profile Information</p>
        <p>Profile Picture: <?php echo"<img src= '../images/$img' height='150' width='150';>"?></p>
        <p>Name: <?php echo"$name";?></p>
        <p>Gender: <?php echo"$gender";?></p>
           <p>Date of Birth: <?php echo"$DateofBirth";?></p>
            <p>Email: <?php echo"$email";?></p>
        </section>
    </div>
</body>

</html>
