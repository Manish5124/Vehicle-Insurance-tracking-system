<?php 
 include "fback.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Create Registration form with MySQL and PHP</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style type="text/css" media="screen">
		
		     body,.diagonal-gradient{
				
				background:linear-gradient(to bottom right,blue,black);
					background-repeat:no-repeat;
			}
		.main{
			position:relative;
		    left:50%;
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

</head>
<body>
	<div class='container'>
		<div class='row'>
			<div clas s='col-md-12'>
			<h2>Registration Form</h2>
			</div>

			<div class='col-md-6' >
 					
				<form method='post' action='success.php'>

					
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
					 <div class="form-group">
					    <label for="V_no">Vehicle no:</label>
					    <input type="text" class="form-control" name="V_no" id="V_no" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="ch_no">Chassis no:</label>
					    <input type="text" class="form-control" name="ch_no" id="ch_no" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="e_no">Engine no:</label>
					    <input type="text" class="form-control" name="e_no" id="e_no" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="V_class">Vehicle class:</label>
					    <input type="text" class="form-control" name="V_class" id="V_class" required="required" maxlength="80">
					</div>									
					<div class="form-group">
					    <label for="model">model:</label>
					    <input type="text" class="form-control" name="model" id="model" required="required" maxlength="80">
					</div>
					<div class="form-group">
					<label for="i_no">Insurance no:</label>
					    <input type="text" class="form-control" name="i_no" id="i_no" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="i_to">insurance upto:</label>
					    <input type="date" placeholder='d-m-y' value="" min="01-01-1997" max="31-12-2030" class="form-control" name="i_to" id="i_to" required="required" maxlength="80">
					</div>
					<div class="form-group">
					  <label for="pu_no">PUCC no:</label>
					    <input type="text" class="form-control" name="pu_no" id="pu_no" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="pu_to">PUCC upto:</label>
					    <input type="date" placeholder='d-m-y' value="" min="01-01-1997" max="31-12-2030" class="form-control" name="pu_to" id="pu_to" required="required" maxlength="80">
					</div>
			        <button type="submit" name="buttn" class="btn btn-default"   >Submit</button>
				</form>
				</div>
			
			
		</div>
	</div>
</body>
</html>
