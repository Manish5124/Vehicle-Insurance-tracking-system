<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $email=$_POST['email'];
 $pass=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "test1");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND email='$email'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: searchmodi.php"); // Redirecting to other page
 }
 else
 {
 $error = "Email or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>