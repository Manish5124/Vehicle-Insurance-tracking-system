<?php
include("loginserv.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	 <script   src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
<style>body,.diagonal-gradient{
				
				background:linear-gradient(to bottom right,blue,black);
				background-repeat:no-repeat;
			}
			#seen{
			 			color:black;
	        position: relative;
			left:120px;
			top :-30px;
			z-index: 2;
		cursor:pointer;
      }  #seen:hover{
        color:blue;
      }
.login{
	position:relative;
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}

	  </style>
 
<script>
$(function() {

$("#seen").on("click",function(){
  var x = $("#password");
  if (x.attr('type') === "password") {
        x.attr('type','text');
        $(this).removeClass('fa fa-eye-slash')
        $(this).addClass('fa fa-eye')
    } else {
        x.attr('type','password');
        $(this).removeClass('fa fa-eye')
        $(this).addClass('fa fa-eye-slash')
  } // End of if
})// End of click event

});
</script>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="email" name="email"><br/><br/>
<input type="password" placeholder="Password" id="password" name="password">		 <span id="seen" class="fa fa-eye-slash"> </span>
		<br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>