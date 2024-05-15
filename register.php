<?php
  $username = $_POST['username'];
  $userdob = $_POST['userdob'];
  $usergender = $_POST['usergender'];
  $userbloodgrp = $_POST['userbloodgrp'];
  $usernumber = $_POST['usernumber'];
  $useraddress = $_POST['useraddress'];
  $useremail = $_POST['useremail'];
  $password = $_POST['password'];
  $userheight = $_POST['userheight'];
//   $userphoto = $_POST['userphoto'];

  $conn = new mysqli('localhost','root','','miniproject');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
        // change a table name for check
    $stmt = $conn->prepare("insert into register(username,userdob,usergender,userbloodgrp,usernumber,useraddress,useremail,password,userheight)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssiissi", $username,$userdob,$usergender,$userbloodgrp,$usernumber,$useraddress,$useremail,$password,$userheight);
    $stmt->execute();
    // echo"registration successfully";
    header('Location:index.html');
    $stmt->close();
    $stmt->close();
  } 

?>