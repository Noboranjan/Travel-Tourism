<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
    $aname=$_POST['aname'];
	$destination=$_POST['destination'];
	$duration=$_POST['duration'];
	$cost=$_POST['cost'];
	
	mysqli_query($conn,"update tagency set aname='$aname', destination='$destination', duration='$duration' , cost='$cost' where userid='$id'");
	header('location:ind.php');

?>