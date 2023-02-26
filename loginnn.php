<?php


if(isset($_POST['log'])){
  include "config.php";

    $user_email=mysqli_real_escape_string($conn,$_POST['mail']);
    $user_password=md5($_POST['password']);

    $sql="SELECT * from user_log4 where	user_mail='{$user_email}' and user_password='{$user_password}'";
    $result= mysqli_query($conn, $sql) or die("query unsuccessful");
    

    if(mysqli_num_rows($result)>0){
    
    while($row=mysqli_fetch_assoc($result)){
      session_start();
      $_SESSION['session_name']=$row['user_name'];
      $_SESSION['session_email']=$row['user_mail'];
      header("Location:http://localhost/minor%20project/index.php");
      
     
    }
   
    }else{
      echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Login details is incorrect.Please try again.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

       }

}

?>


<html>
<head><title>LOGIN FROM</title>

<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

<div class="loginbox">
<img src="images/Nt.png" class="avatar">
<h2 align="center">LOGIN</h2>

<form action="" method="post">
<label for="user"><p>Email</p></label>
<input type="email" id="user" placeholder="Enter mail" name="mail" required>

<label for="pass"><p>Password</p></label>
<input type="password" id="pass" placeholder="Enter password" name="password" required>

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" name="log">Login</button><br>
</div>
<a href="reg.php">Create a new account</a>

</form>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>