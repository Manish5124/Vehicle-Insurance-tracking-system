<?php 

	include "connect.php";
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);
        $mobile = trim($_POST['mobile']);
		$Address = trim($_POST['Address']);


		$isValid = true;

		// Check fields are empty or not
		if($fname == '' || $lname == '' || $email == '' || $password == '' || $confirmpassword == '' || $mobile == '' || $Address == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}

		// Check if confirm password matching or not
		if($isValid && ($password != $confirmpassword) ){
			$isValid = false;
			$error_message = "Confirm password not matching.";
		}

		// Check if Email-ID is valid or not
		if($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists
			$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if($result->num_rows > 0){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			}
			
		}

		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO users(fname,lname,email,password,mobile,Address ) values(?,?,?,?,?,?)";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("ssssss",$fname,$lname,$email,$password,$mobile,$Address);
			$stmt->execute();
			$stmt->close();

			$success_message = "Account created successfully.";
		}
	}
	

	?>
