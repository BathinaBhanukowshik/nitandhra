<?php      
    include('connection12.php');  
    $rollno = $_POST['roll'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $rollno = stripcslashes($rollno);  
        $password = stripcslashes($password);  
        $rollno = mysqli_real_escape_string($con, $rollno);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from loginform where rollno = '$rollno' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           echo "<h1> Login Successfull.</h1>"; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  