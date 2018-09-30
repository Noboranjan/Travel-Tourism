<?php
	include('conn.php');
	
	$aname=$_POST['aname'];
	$destination=$_POST['destination'];
	$duration=$_POST['duration'];
	$cost=$_POST['cost'];
	mysqli_query($conn,"insert into tagency (aname, destination, duration, cost) values ('$aname', '$destination', '$duration', '$cost')");
	header('location:ind.php');

?>