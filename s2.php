<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $vehicle = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","test1");
    
    // mysql search query
    $query = "SELECT * FROM `user` WHERE `V_no` = $vehicle LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $V_no = $row['V_no'];
        $i_no = $row['i_no'];
        $pu_no = $row['pu_no'];
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $V_no = "";
            $i_no = "";
            $pu_no= "";
    }
    
    
   
    mysqli_close($connect);
    
}

?>