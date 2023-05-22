
<?php
  session_start();
 	include 'db.php';
  $error = "";
    if (true) {
     	$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$dob = $_POST['dob'];
		$f_name = $first_name.' '.$last_name;
     

  		$q = "INSERT INTO `users` (`first_name`,`last_name`,`email`,`phone`,`password`,`dob`,`name`) VALUES ('".$first_name."','".$last_name."','".$email."','".$phone."','".$password."','".$dob."','".$f_name."')";
      $query = mysqli_query($conn,$q); 
      if($query){
         
          echo 1;
      }else{
      		$_SESSION['mail'] =  $email;
          	$_SESSION['name'] =  $f_name;
          	echo 1;
      }
    }else{
          echo 1;
    }
?>