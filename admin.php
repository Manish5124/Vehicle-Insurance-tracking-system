<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Admin Login</title>  
</head>  
<style> 
body,.diagonal-gradient{
				
				background:linear-gradient(to bottom right,blue,black);
					background-repeat:no-repeat;
					color:white;
			
			}
			.container{
				text-align:center;
			}
    .login-panel {  
        margin-top: 150px;
		   
	}		
      #button:hover{
			color:red;
			}
            .panel-title{
                margin-left:-175;
                            }
		.panel-body{
			width: 180px;
	
			margin-left:520px ;
			border-style:double;
            border-radius:10px;
            border:2px solid #ccc;
            padding:10px 40px 25px;
			}

</style>  
  
<body>  
<div><h2 style="color:white">Home</h2> 
			<a href="index.html"><img src="images/icon1-act.gif" alt="" /></a>
				</div> 
<div class="container">  
    <div class="row">  
   
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin login</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="">  
                        
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
                            <input id="button" class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
                         
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  
include("connect.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($con,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('adminc.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  