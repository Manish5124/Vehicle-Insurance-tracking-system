<?php
function s1mail($arg,$msg){

		$to=$arg; // Receiver Email ID, Replace with your email ID
		$subject='Vehicle insurance expire';
		$message="your vehicle insurance is expire on  date: ".$msg." it just reminder to renew your  vehicle insurance ";
		$headers="From: ".'Boss19091998@gmail.com';

		if(mail($to, $subject,$message, $headers)){
			echo "<h1>Sent Successfully! Thank you".$arg.", We will contact you shortly!</h1>";
		}
		
	}  
		
		
		
	function s2mail($arg,$msg){

		$to=$arg; // Receiver Email ID, Replace with your email ID
		$subject='Vehicle insurance expire';
		$message="Today ".$msg." your vehicle insurance is expire please renew your vehicle insurance";
		$headers="From: ".'Boss19091998@gmail.com';

		if(mail($to, $subject,$message, $headers)){
			echo "<h1>Sent Successfully! Thank you".$arg.", We will contact you shortly!</h1>";
		}
		
	}  
	
	function s3mail($arg,$msg){
		
		$to=$arg; // Receiver Email ID, Replace with your email ID
		$subject='Vehicle insurance expire';
		$message="your vehicle insurance is expireed at ".$msg." today is ".date('yy-m-d')." so please renew your vehicle insurance";
		$headers="From: ".'Boss19091998@gmail.com';

		if(mail($to, $subject,$message, $headers)){
			echo "<h1>Sent Successfully! Thank you".$arg.", We will contact you shortly!</h1>";
		}
		
	}  

	?>