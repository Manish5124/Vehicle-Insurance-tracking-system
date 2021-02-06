<?php
	 include "connect.php";
	 
	 if(isset($_POST['search'])){
		 $search = mysqli_real_escape_string($con,$_POST['search']);
	 //$sql = "SELECT * FROM  `user` WHERE `V_no` ='$search'";
   //      $sql="SELECT i_no,i_to,pu_no,pu_to,email,fname,lname,address,mobile,V_no=(SELECT V_no FROM  `user` WHERE `V_no` ='$search') FROM users NATURAL JOIN user"; 
	//WHERE V_no IN {SELECT V_no FROM  `user` WHERE `V_no` ='$search'}";
			// $sql = "SELECT V_no,i_no,i_to,pu_no,pu_to,email,fname,lname,address,mobile FROM  users NATURAL JOIN  user WHERE `V_no` ='$search'";
 $sql = "SELECT * FROM users NATURAL JOIN user WHERE `V_no`='$search'"; 		
		$result = mysqli_query($con,$sql);
		 $queryresult = mysqli_num_rows($result);
		 
		
		 ?>
		 <html>    
		 <head>
		 <style>
		 body{
			 background-color:blue;
			color:white;
			
		 }
		 #title{
			 text-align:center;
			 text-shadow:2px 2px black;
		 }
		 #id{
			 color:black;
		 }
		 </style>
		 </head>
    <body>     
	
<div><h2 style="color:white">Home</h2> 
			<a href="index.html"><img src="images/icon1-act.gif" alt="" /></a>
				</div>    
		<link href = "style.css" type = "text/css" rel = "stylesheet" /> 
	   
	     <h1 id="title">	VEHICLE DETAILS </h1>
		<table id="table" width = "100%" border = "1" >    
            <tr>    
			    <td>fname</td>    
                <td>lname</td>    
                <td>mobile</td>    
                <td>Address</td>
				<td>email</td>
                <td>vehicle no</td>    
                <td>chassis no</td>    
                <td>engine no</td>    
                <td>vehicle class</td> 
				<td>model</td>
			    <td>insurance no</td> 
			    <td>PUCC no<td> 
            </tr>
				<?php
		 if($queryresult >0){
			 
			 
			 while($row = mysqli_fetch_assoc($result)){
?>

<tr> 			<td>  
					<?php echo $row['fname'];?>  
				</td>  
				<td>  
					<?php echo $row['lname'];?>  
				</td>  
				<td>  
					<?php echo $row['mobile'];?>  
				</td>  
				<td>  
					<?php echo $row['Address'];?>  
				</td>  
				<td>  
					<?php echo $row['email'];?>  
				</td>  
				<td>  
		
					<?php echo $row['V_no'];?>  
				</td>  
				<td>  
					<?php echo $row['ch_no'];?>  
				</td>  
				<td>  
					<?php echo $row['e_no'];?>  
				</td>  
				<td>  
					<?php echo $row['V_class'];?>  
				</td>  
				<td>  
					<?php echo $row['model'];?>  
				</td>  
				<td>  
					<?php echo $row['i_no'];?>  
				</td>  
				  <td>  
					<?php echo $row['pu_no'];?>  
				</td>  
				
			</tr>


				 
		<?php
			 }
		 }else{
			 echo "There are no result matching your search";
		 }
	 }
	 ?>
	  </table>   		
    </body>    
</html>