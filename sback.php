<?php 

	include "connect.php";
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['buttn'])){
		$V_no = trim($_POST['V_no']);
		$ch_no = trim($_POST['ch_no']);
		$e_no = trim($_POST['e_no']);
		$V_class = trim($_POST['V_class']);
		$model = trim($_POST['model']);
        $i_no = trim($_POST['i_no']);
		$i_to = trim($_POST['i_to']);
		$pu_no = trim($_POST['pu_no']);
		$pu_to = trim($_POST['pu_to']);


		$isValid = true;

		// Check fields are empty or not
		if($V_no == '' || $ch_no == '' || $e_no == '' || $V_class == '' || $model == '' || $i_no == '' || $i_to == '' || $pu_no == '' || $pu_to == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}



		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO user(V_no,ch_no,e_no,V_class,model,i_no,i_to,pu_no,pu_to ) values(?,?,?,?,?,?,?,?,?)";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("sssssssss",$V_no,$ch_no,$e_no,$V_class,$model,$i_no,$i_to,$pu_no,$pu_to);
			$stmt->execute();
			$stmt->close();

			$success_message = "Account created successfully";
			header("Location: success.php"); 
			 
		}
	}
	?>