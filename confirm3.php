<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="confirm.css">
</head>
<body>
 <?php

  
if(isset($_POST['confirm'])){

    include "config.php";

    $f_name=mysqli_real_escape_string($conn,$_POST['fname']);
    $m_name=mysqli_real_escape_string($conn,$_POST['mname']);
    $l_name=mysqli_real_escape_string($conn,$_POST['lname']);
    $contact=mysqli_real_escape_string($conn,$_POST['phone']);
    $address=mysqli_real_escape_string($conn,$_POST['add']);
    $s_num=mysqli_real_escape_string($conn,$_POST['num']);
    $c_num=mysqli_real_escape_string($conn,$_POST['cnum']);
    $month=mysqli_real_escape_string($conn,$_POST['month']);
    $year=mysqli_real_escape_string($conn,$_POST['year']);
    $cv=mysqli_real_escape_string($conn,$_POST['cvn']);


    $sql= "UPDATE `payment_info2` SET `Fname`='$f_name',`Mname`='$m_name',`Lname`='$l_name',`phone`='$contact',`addr`='$address',
    `sit_num`='$s_num',`card_num`='$c_num',`month`='$month',`year`='$year',`cvn`='$cv' WHERE id=1";
    $result= mysqli_query($conn, $sql) or die("query unsuccessful");
    

   }
 include "config.php";

 $sql1="SELECT * FROM payment_info2 where id=1"; 
 $result1= mysqli_query($conn, $sql1) or die("query unsuccessful");
 $row1=mysqli_fetch_assoc($result1);

 $sql2="SELECT * FROM user_input2 where id=1"; 
 $result2= mysqli_query($conn, $sql2) or die("query unsuccessful");
 $row2=mysqli_fetch_assoc($result2);

 $sql5="SELECT * FROM `t_fair1` WHERE id=1";  
 $result5= mysqli_query($conn, $sql5) or die("query unsuccessful");
 $row5=mysqli_fetch_assoc($result5);
 
    
?>
<center>
<div class="letter">
    <form action="ticket3.php" method="post">
<h4>Billing Info</h4>
<p class="list"><?php echo $row1['Fname']." ".$row1['Mname']." ".$row1['Lname'].","." your journey from ".$row2['board']." to ".$row2['destination']." will begin on ".$row2['calen'].
" at 2.30 AM."  ?><br>In the situation of Covid crysis, We are requesting you to follow the Covid guidelines according to Indian government.<a href="https://covid19.india.gov.in/document/guidelines-for-domestic-travel-air-train-inter-state-bus-travel/"> See the details here</a></p>
<p>Total is: <strong>&#8377; <?php echo $row5['price']* $row1['sit_num']; ?></strong></p>
<button type="submit" class="btn btn-success" name="pay">Confirm & Pay</button>
<button type="button" class="btn btn-outline-secondary" name='tc'>Term & Condition applied</button>
</form>
</div>
<div class="preloader">
      <div class="spinner-border" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
</div>
</center>

</body>
</html>