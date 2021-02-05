<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Search</title>  
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
			  .search-success {  
        margin-top: 150px;
		   
	}		
				.form-body{
			width: 180px;
	
			margin-left:520px ;
			border-style:double;
			border-radius: 10px;
			border: 5px solid #dc143c;
			box-shadow: 1px 2px 10px #555;
			}

			button:hover{
			color:blue;
			}
		

</style>

</head>
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="search-success">  
                <div class="heading">  
                    <h3 class="title">Search Vehicle details</h3>  
                </div>  
				 <div class="form-body">  
	<form method="POST" action="searchmodi.php" >
<input type="search" name="search" placeholder="Mp xx mr xxxx"><br>
<button type="submit" name="submit" id="button">submit</button>
</form>
  </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>
</html>