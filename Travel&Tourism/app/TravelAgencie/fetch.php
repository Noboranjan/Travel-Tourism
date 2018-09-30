<?php

 error_reporting(0);	
	session_start();

	if($_SESSION['abc']=='987' || $_COOKIE['abc']=="987")
	{



$connect = mysqli_connect("localhost", "root", "", "tt");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM customer 
	WHERE Name LIKE '%".$search."%'
	OR Email LIKE '%".$search."%' 
	OR Phone LIKE '%".$search."%' 
	OR Aname LIKE '%".$search."%' 
	OR Destination LIKE '%".$search."%' 
	OR Brno LIKE '%".$search."%' 
	OR Tid LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM customer ORDER BY CustomerID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>agency Name</th>
							<th>Destination</th>
							<th>Bkash/Rocket No</th>
							<th>transaction ID</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Email"].'</td>
				<td>'.$row["Phone"].'</td>
				<td>'.$row["AName"].'</td>
				<td>'.$row["Destination"].'</td>
				<td>'.$row["Brno"].'</td>
				<td>'.$row["Tid"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}



}else{
		header("location: ..\login2.php");

	}


?>