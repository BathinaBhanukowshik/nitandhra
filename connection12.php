<?php      
    $host = "localhost";  
    $roll = "root";  
    $password = '';  
    $db_name = "nitandhra";  
      
    $con = mysqli_connect($host, $roll, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 