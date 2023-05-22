
<?php
  session_start();
 include 'db.php';
  $error = "";
    if (isset($_POST['email'])) {
      $email=$_POST['email'];
     $password=$_POST['password'];
     
      $q="select * from users where email= '".$email."' AND password='".$password."' ";
      $result=mysqli_query($conn,$q);
      $num_row = mysqli_num_rows($result);
      if ($num_row==1) {
          echo 'you have successfully logged in';
          $_SESSION['mail'] =  $email;

          $q = 'SELECT * FROM users where EMAIL="'.$email.'"';
          $result = mysqli_query($conn,$q);
          while($row=mysqli_fetch_array($result)){
            $_SESSION['name'] =  $row['name'];
          }

           header('location:index.php');
      }else{
        echo $error =  "you have entered incurrect data";
      }
    }
    else if (isset($_GET['is_logout'])) {
        session_destroy();
        header('location:index.php');
    }
?>