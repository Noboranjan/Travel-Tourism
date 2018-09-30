<?php
	session_start();
	
	if($_SESSION['abc']=='123')
	{
		echo "welcome to profile page";
		
	}else{
		header("location: login.php");

	}
	
?>

	





<!DOCTYPE html>
<html>
<head>
	<title>Destination Places</title>
	
	
</head>
	







<body>
         <form method="post" action="home.php">
	

	<table align="center" border="1" width="1000" height="550"  cellpadding="10" cellspacing="0" >
		
		<tr>
			<td height="30" align="center"><h2>Destination Places</h2></td>
		</tr>
		
		
		<tr>
			
			<td>
				<table border="0" cellpadding="5" cellspacing="10">
					<tr>
						<td width="300" height="300">
							
								<img src="images2.jpeg"" align="center" width="300px" height="150"/>
							
								
						</td>
						
						<td width="300" >
							
								<img src="images3.jpeg" align="center" width="300px" height="150"/>
							
						</td>
						
						<td width="300">
							
								<img src="images4.jpeg" align="center" width="300px" height="150"/>
							
						</td>
					</tr>
					
					<tr>
						<td width="300" height="300">
							
								<img src="images5.jpeg" align="center" width="300px" height="150"/>
							
						</td>
						
						<td width="300" >
							
								<img src="index.jpeg" align="center" width="300px" height="150"/>
							
						</td>
						
						<td width="300">
							
								<img src="index7.jpeg" align="center" width="300px" height="150"/>
							
						</td>
					</tr>
					
					<tr>
						<td width="300" height="300">
							
								<img src="index8.jpeg" align="center" width="300px" height="150"/>
							
						</td>
						
						<td width="300" >
							
								<img src="images9.jpeg" align="center" width="300px" height="150"/>
							
						</td>
						
						<td width="300">
							
								<img src="images10.jpeg" align="center" width="300px" height="150"/>
							
						</td>
					</tr>
					
					
					
				 </table>
			 </td>
			
												
		</tr>
		
		<tr height="5">
			<td  valign="top" colspan="2"><center>Copyright 2018</center></td>
		</tr>	
	</table>
</body>