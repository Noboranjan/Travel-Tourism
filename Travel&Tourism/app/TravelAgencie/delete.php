<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from tagency where userid='$id'");
	header('location:ind.php');

?>