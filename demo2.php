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
    <title>Available trains</title>
    <link rel="stylesheet" type="text/css" href="style.php">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body bgcolor="#e2ece9">
<?php
 
  include "config.php";

if(isset($_POST['search'])){
  

 include "config.php";


      $from=mysqli_real_escape_string($conn,$_POST['from']);
      $to=mysqli_real_escape_string($conn,$_POST['to']);
      $date=mysqli_real_escape_string($conn,$_POST['cal']);
      $class=mysqli_real_escape_string($conn,$_POST['classes']);
      $occup=mysqli_real_escape_string($conn,$_POST['general']); 

      $sql= "UPDATE `user_input2` SET `id`='1',`board`='$from',`destination`='$to',`calen`='$date',`class`='$class',`occup`='$occup' WHERE 1";
      $result= mysqli_query($conn, $sql) or die("query unsuccessful1");

  
}



  $sql1="SELECT * FROM train_table2 where t_id=1";  //layout 1
  $result1= mysqli_query($conn, $sql1) or die("query unsuccessful2");
  $row1=mysqli_fetch_assoc($result1);

  $sql2="SELECT * FROM train_table2 where t_id=2";  //layout 2
  $result2= mysqli_query($conn, $sql2) or die("query unsuccessful");
  $row2=mysqli_fetch_assoc($result2);

  
  $sql3="SELECT * FROM train_table2 where t_id=3";  //layout 3
  $result3= mysqli_query($conn, $sql3) or die("query unsuccessful");
  $row3=mysqli_fetch_assoc($result3);

  
  $sql4="SELECT * FROM train_table2 where t_id=4"; //layout 4
  $result4= mysqli_query($conn, $sql4) or die("query unsuccessful");
  $row4=mysqli_fetch_assoc($result4);

  //---------------sql's for price---------------


  $sql5="SELECT * FROM price2 where id=1";  
 $result5= mysqli_query($conn, $sql5) or die("query unsuccessful");
 $row5=mysqli_fetch_assoc($result5);

 $sql6="SELECT * FROM price2 where id=2";  
 $result6= mysqli_query($conn, $sql6) or die("query unsuccessful");
 $row6=mysqli_fetch_assoc($result6);

 $sql7="SELECT * FROM price2 where id=3";  
 $result7= mysqli_query($conn, $sql7) or die("query unsuccessful");
 $row7=mysqli_fetch_assoc($result7);

 $sql8="SELECT * FROM price2 where id=4"; 
 $result8= mysqli_query($conn, $sql8) or die("query unsuccessful");
 $row8=mysqli_fetch_assoc($result8);

  ?>
    <center>
     
      <div class="layout">  <!----layout 1----->
         <div class="train">
         <h3><u> <?php  echo $row1["t_name"]." (".$row1["t_number"].")";?></u></h3>
         </div>
         <?php
          $my=$_POST['from'];
         echo $my." &#8594; ". $_POST['to'];
         ?>
       <div class="date">
         <?php
         echo $_POST['cal'];
         ?>
       </div>
       <div class="time">
        <h4><?php  echo $row1["t_time"];?></h4>
       </div>
       
       <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
      <form action="payment.php" method="post">
     <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?> <h6> &#8377; <?php echo $row5['sa'];?></h6>
       <button type="submit" class="btn btn-success" name="search1">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row5['sb'];?></h6>
       <button type="submit" class="btn btn-success" name="search2">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row5['sc'];?></h6>
       <button type="submit" class="btn btn-success" name="search3">Book Now</button>
    </div>
    </form>
    </div>
  </div>
</div>


    </div>

    <div class="layout">  <!----layout 2----->
         <div class="train">
         <h3><u><?php  echo $row2["t_name"]." (".$row2["t_number"].")";?></u></h3>
         </div>
         <?php
         echo $_POST['from']." &#8594; ". $_POST['to'];
         ?>
       <div class="date">
         <?php
         echo $_POST['cal'];
         ?>
       </div>
       <div class="time">
        <h4><?php  echo $row2["t_time"];?></h4>
       </div>
       
       <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
      <form action="payment2.php" method="post">
     <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?> <h6> &#8377; <?php echo $row6['sa'];?></h6>
       <button type="submit" class="btn btn-success" name="search4">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row6['sb'];?></h6>
       <button type="submit" class="btn btn-success" name="search5">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row6['sc'];?></h6>
       <button type="submit" class="btn btn-success" name="search6">Book Now</button>
    </div>
    </form>
    </div>
  </div>
</div>


    </div>

    <div class="layout">  <!----layout 3----->
    <form action="demo.php" method="post">
         <div class="train">
         <h3><u> <?php  echo $row3["t_name"]." (".$row3["t_number"].")";?></u></h3>
         </div>
         </form>
         <?php
         echo $_POST['from']." &#8594; ". $_POST['to'];
         ?>
       <div class="date">
         <?php
         echo $_POST['cal'];
         ?>
       </div>
       <div class="time">
        <h4><?php  echo $row3["t_time"];?></h4>
       </div>
       
       <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
      <form action="payment3.php" method="post">
     <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?> <h6> &#8377; <?php echo $row7['sa'];?></h6>
       <button type="submit" class="btn btn-success" name="search7">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row7['sb'];?></h6>
       <button type="submit" class="btn btn-success" name="search8">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row7['sc'];?></h6>
       <button type="submit" class="btn btn-success" name="search9">Book Now</button>
    </div>
    </form>
    </div>
  </div>
</div>


    </div>
    
    <div class="layout">  <!----layout 4----->
         <div class="train">
         <h3><u> <?php  echo $row4["t_name"]." (".$row4["t_number"].")";?></u></h3>
         </div>
         <?php
         echo $_POST['from']." &#8594; ". $_POST['to'];
         ?>
       <div class="date">
         <?php
         echo $_POST['cal'];
         ?>
       </div>
       <div class="time">
        <h4><?php  echo $row4["t_time"];?></h4>
       </div>
       
       <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
      <form action="payment4.php" method="post">
     <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?> <h6> &#8377; <?php echo $row8['sa'];?></h6>
       <button type="submit" class="btn btn-success" name="search10">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row8['sb'];?></h6>
       <button type="submit" class="btn btn-success" name="search11">Book Now</button>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light"><?php echo $_POST['classes']; ?><h6> &#8377; <?php echo $row8['sc'];?></h6>
       <button type="submit" class="btn btn-success" name="search12">Book Now</button>
    </div>
    </form>
    </div>
  </div>
</div>


    </div>
    </form>
</center>

</body>
</html>