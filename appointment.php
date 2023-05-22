<?php
include 'db.php';

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);  
  $date = mysqli_real_escape_string($conn, $_POST['date']);
  $department = mysqli_real_escape_string($conn, $_POST['department']);
  $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $q = " INSERT INTO `appointments`(`name`,`email`,`phone`,`date`,`department`,`doctor`,`message`) VALUES ('".$name."','".$email."','".$phone."','".$date."','".$department."','".$doctor."','".$message."')";

   if($result = mysqli_query($conn,$q)){
   	echo 'Appointment Submitted!';
   }else{
   	echo 0;
   }
  

?>