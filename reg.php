<?php 

if(isset($_POST['reg'])){
  
 
 include "config.php"; //conn="nested train"

      $user_name=mysqli_real_escape_string($conn,$_POST['name']);
      $user_email=mysqli_real_escape_string($conn,$_POST['email']);
      $user_password=mysqli_real_escape_string($conn,md5($_POST['password']));
      $user_con_password=mysqli_real_escape_string($conn,md5($_POST['con_password']));
       
      if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user_log4 WHERE user_mail='{$user_email}'"))>0) {

        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> - This email has already taken. Please try to login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      else{
           if($user_password === $user_con_password){
               $sql= "INSERT into user_log4  (user_name,user_mail,user_password) VALUES('{$user_name}','{$user_email}','{$user_password}')";
               $result= mysqli_query($conn, $sql) or die("query unsuccessful");

               if($result){
                      

                header("Location: https://localhost/minor%20project/loginnn.php");
                        
               }else{
                echo "<script>Error: '.$sql.mysqli_error($conn).' </script>";

               }
           }else{
            echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> Password and confirm password should be matched.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

                }
         }


}

?>

<html>
<head><title>REGISTER FROM</title>

<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
<div class="loginbox">
<img src="images/Nt.png" class="avatar">
<h2 align="center">REGISTER</h2>

<form action="" method="post" class="form">
<label for="user"><p>Username</p></label>
<input type="text" id="user" placeholder="Username" name="name" required>

<label for="email"><p>Email</p></label>
<input type="email" id="email" placeholder="email" name="email" required>

<label for="pass"><p>Password</p></label>
<input type="password" id="pass" placeholder="password" name="password" required>

<label for="pass2"><p>Confirm Password</p></label>
<input type="password" id="pass2" placeholder="confirm password" name="con_password" required>

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" name="reg">Register</button>
</div>
<a href="loginnn.php">I have an account</a>

</form>

</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>