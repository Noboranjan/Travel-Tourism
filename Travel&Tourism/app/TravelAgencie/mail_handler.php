<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='jakiulalam.ja@mail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
        $message = wordwrap($message, 70);
		
		
		mail($to, $subject, $message, $headers){
			
			   echo "Thank you for sending us feedback";
			
			
		}
		
		
		else{
			echo "Something went wrong!";
		}
	}
	
?>