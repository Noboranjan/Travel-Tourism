<?php
error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='321' || $_COOKIE['abc']=="321")
	{


 $con=mysqli_connect('localhost','root','');
 
   if(!$con)
   {
	   
	   echo'Not Connected to server';
	   
   }
   
   if(!mysqli_select_db($con,'tt'))
   {
	   
	   echo'Database not Selected';
	   
   }
   
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$aname=$_POST['aname'];
	$destination=$_POST['destination'];
	$brno=$_POST['brno'];
	$tid=$_POST['tid'];


	$sql="insert into customer (Name, Email, Phone, AName, Destination, Brno, Tid) values ('$name','$email','$phone','$aname', '$destination', '$brno', '$tid')";
	
	if(mysqli_query($con,$sql))
	{
		echo'inserted';
		
	}
	
	else {
	
			echo' not inserted';
	}
	
	
	
	
	header('location:payment.php');


































}else{
		header("location: ..\login2.php");

	}








?>















