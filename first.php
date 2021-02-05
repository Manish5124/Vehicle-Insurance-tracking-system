<?php  
	include "connect.php";
	?>   

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Create Registration form with MySQL and PHP</title>
	<link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	 <script   src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
<style type="text/css" media="screen">
		
		     body,.diagonal-gradient{
				
				background:linear-gradient(to bottom right,blue,black);
					background-repeat:no-repeat;
			}
			 #show{
			 			color:blue;
	        position: relative;
			left:470px;
			top :-25px;
			z-index: 2;
		cursor:pointer;
      } 
		 #sshow{
			color:blue;
	        position: relative;
			left:470px;
			top :-25px;
			z-index: 2;
		cursor:pointer;
      } 
      
      #show:hover{
        color:black;
      }
	   #sshow:hover{
        color:black;
      }
		.main{
			position:relative;
		    left:280px;
			width: 500px;
			margin: 50px ;
			border-style:double;
			border-radius: 10px;
			border: 5px solid #dc143c;
			box-shadow: 1px 2px 10px #555;
		}
		
		.form-box{
			padding: 20px;
			background-color: #eee;
		}
		label{
			color:white;
			font-size: 18px;
		}
		.inp,{
			width: 100%;
			padding: 10px;
			margin-top: 4px;
			margin-bottom: 5px;
			border-radius: 5px;
			border: 2px solid #dc143c;
			font-weight: bold;
			color: light blue;
			border-right: 15px solid #dc143c;
			border-left: 15px solid #dc143c;
			resize: none;
		}
		
		.inp:focus{
			outline: none;
			border: 2px solid navy;
			border-right: 15px solid navy;
			border-left: 15px solid navy;
		}
		.sub-btn{
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			margin-top: 5px;
			border: none;
			background: linear-gradient(#dc143c,#800000);
			cursor: pointer;
			color: #fff;
			font-size: 20px;
			text-shadow: 1px 1px 1px #444;
		}
		.sub-btn:hover{
			background: linear-gradient(#800000,#dc143c);
			opacity: 0.8;
			transition: all ease-out 0.2s;
		}
		.sub-btn:focus{
			outline: none;
		}
	</style>
	<script>
$(function() {

$("#show").on("click",function(){
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
<script>
$(function() {

$("#sshow").on("click",function(){
  var a = $("#confirmpassword");
  if (a.attr('type') === "password") {
        a.attr('type','text');
        $(this).removeClass('fa fa-eye-slash')
        $(this).addClass('fa fa-eye')
    } else {
        a.attr('type','password');
        $(this).removeClass('fa fa-eye')
        $(this).addClass('fa fa-eye-slash')
  } // End of if
})// End of click event

});
</script>
</head>
<body>
<div><h2 style="color:white">Home</h2> 
			<a href="index.html"><img src="images/icon1-act.gif" alt="" /></a>
				</div>
	<div class='container'>
		<div class='row'>
			<div class="col-md-12">
			
		</div>

			<div class="col-md-8" >
 					
				<form action='second.php' method='post' >

					
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
					
					<div class="main">
						<div class="reg-color">
			         <h1 style="color:white">User details</h1>	
					</div>
					<div class="form-group">
					    <label for="fname">First Name:</label>
					    <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="50"  autofocus>
					</div>
					<div class="form-group">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="50"  autofocus>
					</div>
					<div class="form-group">
					
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="50"  autofocus>
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
					    <input type="password" class="form-control" name="password" id="password" required="required" maxlength="50"  autofocus>
						 <span id="show" class="fa fa-eye-slash"> </span>
					 </div>
					<div class="form-group">
					    <label for="pwd">Confirm Password:</label>
					    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="required" maxlength="50"  autofocus>
						 <span id="sshow" class="fa fa-eye-slash"> </span>
					</div>  
					<div class="form-group">
					    <label for="mobile">mobile No.:</label>
					    <input type="text" class="form-control" name="mobile" id="mobile"  autofocus>
					</div>
					<div class="form-group">
					    <label for="lname">Address:</label>
					    <input type="text" class="form-control" name="Address" id="Address" required="required" maxlength="50"  autofocus>
					</div>
					<button type="submit" name="btnsignup" class="btn btn-default"  >Submit</button>
				    </div>
				</form>
			</div>
			
			
		</div>
	</div>
</body>
</html> 