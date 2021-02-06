<?php    
    
include "connect.php";    
    
$sql = "select * from users NATURAL JOIN  user";    
$result = mysqli_query($con,$sql);    
?>    
<html>    
<style>

		     body,.diagonal-gradient{
				
				background:linear-gradient(to bottom right,blue,black);
					background-repeat:no-repeat;
					color:white;
			}
			h1{
				text-align:center;
				color:white;
			}
</style>
    <body>       <div><h2 style="color:white">Home</h2> 
			<a href="index.html"><img src="images/icon1-act.gif" alt="" /></a>
				</div>   
		<link href = "style.css" type = "text/css" rel = "stylesheet" /> 
		<h1>  Details </h1> 
	
		<table  id="table" width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
				<td>id</td>
                <td>first name</td>    
                <td>last name</td>    
                <td>email</td>    
                <td>mobile</td>    
                <td>Address</td>  
				<td>vehicle no</td>    
                <td>ch_no</td>    
                <td>e_no</td>    
                <td>vehicle class</td>    
                <td>model</td> 
				<td>i_no</td>
				 <td>pu_no</td>    
            
			</tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>
				<td>  
					<?php echo $row->regid;?>  
				</td>  
			
			<td>  
					<?php echo $row->fname;?>  
				</td>  
				<td>  
					<?php echo $row->lname;?>  
				</td> 
				 <td>  
					<?php echo $row->email;?>  
				</td>  
				<td>  
					<?php echo $row->mobile;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td> 
				<td>  
					<?php echo $row->V_no;?>  
				</td>  
				<td>  
					<?php echo $row->ch_no;?>  
				</td>  
				<td>  
					<?php echo $row->e_no;?>  
				</td>  
				<td>  
					<?php echo $row->V_class;?>  
				</td>  
				<td>  
					<?php echo $row->model;?>  
				</td>  
				<td>  
					<?php echo $row->i_no;?>  
				</td>  
				  <td>  
					<?php echo $row->pu_no;?>  
				</td>  
				
				  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>