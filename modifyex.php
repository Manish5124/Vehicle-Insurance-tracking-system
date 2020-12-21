<?php    
  //it is basicallly used to check mail after join to table
include "connect.php";  
include_once("sendmail.php");  
   $d=date("yy-m-d");
   $ad=date('yy-m-d',strtotime($d.' + 10 days'));
   $ld=date('yy-m-d',strtotime($d.' - 10 days'));
   echo "add date=".$ad."<br>";	echo "date=".$d."<br>"; echo "less date=".$ld."<br>";
//$sql = "select email from users,user WHERE users.regid=user.id";    
$sql = "select email,i_to,pu_to from users NATURAL JOIN user ";    //email FROM user WHERE `i_to`='.$i.
//sql = "select email from users INNER JOIN	user ";    

$result = mysqli_query($con,$sql);    
?>    
<html>    
    <body>         
		<link href = "style.css" type = "text/css" rel = "stylesheet" /> 
	
	
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>       
                <td><h1>email</h1></td>    
				<td><h1>i_to</h1></td>
				<td><h1>pu_to<h1></td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){
				echo $row->i_to;
				
     if ($ad==$row->i_to){
		s1mail($row->email,$row->i_to);
		}elseif($d==$row->i_to){
		s2mail($row->email,$row->i_to);
		}elseif($ld==$row->i_to){ 
		s3mail($row->email,$row->i_to);
		}
    
	?>  
			<tr><td>  
					<?php  echo $row->email;?>  
				</td>  
				
				<td>  
					<?php echo $row->i_to;?>  
				</td>  
				  
				<td>  
					<?php echo $row->pu_to;?>  
				</td>  
				  
			</tr> 

		<?php 
//		if($d>$row->i_to){
  //          echo $row->i_to;
		//	$ii=$row->i_to;
		 //$iex = "insurance is expire";		 
		  //echo $iex;
	//	  $sq= "select email from users,user WHERE user.i_to=$row->i_to";
		//  $res=mysqli_query($con,$sq);
		//  while($r = mysqli_fetch_object($res)){ 
		 // echo $r->email;
		  //}
		//}
		}
		?>
				
        </table>   		
    </body>    
</html>