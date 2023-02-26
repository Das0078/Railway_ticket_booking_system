<?php

include "config.php";
session_start();

if(!isset($_SESSION['session_email'])){
    header("Location: https://localhost/minor%20project/loginnn.php");

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="profile.css">
</head>
<body>
<?php   
 
 include "config.php";

 $sql="SELECT * FROM `history` WHERE 1";
 $result=mysqli_query($conn,$sql)or die("query failed");
 $row=mysqli_fetch_assoc($result);
 
 ?>
<center>
<div class="letter">
 <h1>USER PROFILE</h1>
 <p><i class="bi bi-person-check-fill"></i> <b> <?php echo $_SESSION['session_name'];?></b></p>
 <p><i class="bi bi-envelope"></i> <?php echo $_SESSION['session_email'];?></p>
 <a href="logout.php"><button type="button" class="btn btn-outline-dark">Logout</button></a>
 <details class="dtl">Recent History-


  <table border="1px" class="tab-1">
                <tr>
                    <td><b>PNR No:</b><p><?php echo $row['pnr']; ?></p></td>
                    <td><b>Train No. & Name: </b><p><?php echo  $row['train'];?></p></td>
                    <td><b>Quota: </b><p><?php echo  $row['quote']; ?></p></td>
                </tr>
                <tr>
                    <td><b>Transaction ID:</b><p><?php echo  $row['trans'];?></p></td>
                    <td><b>Date & Time of Booking: </b><p><?php echo  $row['booking']; ?></p></td>
                    <td><b>Class: </b><p><?php echo  $row['class'];?></p></td>
                </tr>
                <tr>
                    <td><b>From:</b><p><?php echo  $row['start'];?></p></td>
                    <td><b>To: </b><p><?php echo  $row['finish']; ?></p></td>
                    <td><b>Date & Time of train: </b><p><?php echo  $row['train_dtls']; ?></p></td>
                </tr>
                
          </table>


 </details>
</div>
</center>
<script src="js/bootstrap.js"></script>
</body>
</html>