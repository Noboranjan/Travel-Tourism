
<?php
    error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{
        ?>




<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
</style>






<head>
	<title>Travel tour Details</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-grey w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

	<a href="home.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="ind.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"> Package</a>
    <a href="packagetype.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Tour Type</a>
    <a href="attraction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Attraction</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Hotels</a>
	    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">User Payment info</a>
		    
			  <a href="oticket.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">online Ticket</a>
			   <!-- <a href="payment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Payment</a>-->
				  <a href="feedback.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Feedback</a>
				   <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">logout</a>
  </div>

  
</div>


  
</div><br/><br/>







<div class="container">
	<div style="height:30px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Travel tour Details</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Agency Name</th>
				<th>Destination</th>
				<th>duration</th>
				<th>Cost(Tk:/-):</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `tagency`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['aname']; ?></td>
						<td><?php echo $row['destination']; ?></td>
						<td><?php echo $row['duration']; ?></td>
						<td><?php echo $row['cost']; ?></td>
						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>



<?php
     }else{
		header("location: ..\login2.php");

	}
?>

