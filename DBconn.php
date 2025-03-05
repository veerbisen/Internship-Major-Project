<?php
  $Enrollment =$_POST['Enrollment'];
  $Course =$_POST['Course'];

  //database connection
  $conn = new mysqli_connect('localhost','root','','student login db veer');
  if($conn->connect_error){
    die('connection failed....'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO `attendance` (`Enrollment number`, `Course code`) VALUES ('', '')");
    $stmt->bind_param("is",$Enrollment,$Course);
    $stmt->execute();
    echo"Login successfully....";
    $stmt->close();
    $conn->close();
  }
?>