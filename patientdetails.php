<?php
  $cardnumber = $_POST['cardnumber'];
  $hospitalname = $_POST['hospitalname'];
  $suffering = $_POST['suffering'];
  $visitingdate = $_POST['visitingdate'];
  $prescription = $_POST['prescription'];

  $conn = new mysqli('localhost','root','','miniproject');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
        // change a table name for check
    $stmt = $conn->prepare("insert into userdata(cardnumber,hospitalname,suffering,visitingdate,prescription)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $cardnumber, $hospitalname,$suffering,$visitingdate,$prescription);
    $stmt->execute();
    // echo"registration successfully";
    header('Location:patientdetails.html');
    $stmt->close();
    $stmt->close();
  } 

?>