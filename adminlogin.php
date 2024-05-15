<?php
     $useremail =$_POST['useremail'];
     $password =$_POST['password'];

     //db connection here
     $con =new mysqli("localhost","root","","miniproject");
     if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
     } else{
        $stmt =$con->prepare("select * from register where useremail = ?");
        $stmt ->bind_param("s",$useremail);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] ===$password){
                // echo"<h2>Login successfully</h2>";
                header('Location:patientdetails.html');
            } else {
                echo"<h2>Invalid Email or password</h2>";
            }
        } else {
            echo"<h2>Invalid Email or password</h2>";
        }
     }
    
?>