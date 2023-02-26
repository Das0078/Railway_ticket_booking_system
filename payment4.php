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
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container5">

    <?php

include "config.php";

$sql8="SELECT * FROM price2 where id=4"; 
$result8= mysqli_query($conn, $sql8) or die("query unsuccessful");
$row8=mysqli_fetch_assoc($result8);

if(isset($_POST['search10'])){

$a1=$row8['sa'];
$sqll="UPDATE `t_fair1` SET `id`='1',`price`='$a1'";
$resultt= mysqli_query($conn, $sqll) or die("query unsuccessful");

}elseif(isset($_POST['search11'])){
   $a2=$row8['sb'];
   $sqll="UPDATE `t_fair1` SET `id`='1',`price`='$a2'";
   $resultt= mysqli_query($conn, $sqll) or die("query unsuccessful");
}else{
   $a3=$row8['sc'];
   $sqll="UPDATE `t_fair1` SET `id`='1',`price`='$a3'";
   $resultt= mysqli_query($conn, $sqll) or die("query unsuccessful");
}



?>

     <form action="confirm4.php" method="post">
        <h3>Payment Info</h3>
               <div class="mb-3">
                  <label for="p1" class="form-label">First name</label><span>*</span>
                  <input type="text" name="fname" class="form-control" id="p1" required>
               </div> 
               <div class="mb-3">     
                  <label for="p2" class="form-label">Middle name</label>
                  <input type="text" name="mname" class="form-control" id="p2">
               </div>
               <div class="mb-3">
                  <label for="p3" class="form-label">Last name</label><span>*</span>
                  <input type="text" name="lname" class="form-control" id="p3" required>
               </div>  
               <div class="mb-3">
                  <label for="phone">Phone number</label><span>*</span>
                  <input type="tel" id="phone" name="phone" placeholder="000-0000-000" pattern="[0-9]{3}-[0-9]{4}-[0-9]{3}" required>
               </div>
               <div class="mb-3">
                  <label for="p4" class="form-label">Address</label><span>*</span>
                  <input type="text" name="add" class="form-control" id="p4" required>
               </div>
               <div class="mb-3">
                  <label for="p5" class="label">Select sit number: </label><span>*</span>
                  <input type="number" name="num" class="form-control" min="1" id="p5" required>
               </div> 
               
               <p>Debit card info<span>*</span></p>

               <div class="mb-3">
                  <label for="p6" class="form-label">Card number</label><span>*</span>
                  <input type="tel" name="cnum" class="form-control" id="p6" placeholder="0000-0000-0000" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
               </div>

               <div class="row">
                   <div class="col">
                     <div class="mb-3">
                       <label for="p7" class="form-label">Month/Year</label><span>*</span>
                       <input type="tel" name="month" class="form-control" id="p7" placeholder="Month-00" pattern="[0-9]{2}" required>
                       <input type="tel" name="year" class="form-control" id="p7"  placeholder="Year-00" pattern="[0-9]{2}" required>
                     </div>
                   </div>
                   <div class="col">
                   <div class="mb-3">
                  <label for="p8" class="form-label">CVN</label><span>*</span>
                  <input type="tel" name="cvn" class="form-control" id="p8" placeholder="cvn" pattern="[0-9]{3}" required>
               </div>
                   </div>
               </div>
               
               <button type="submit" class="btn btn-primary" name="confirm">Confirm & Proccess</button>
        
     </form>

    </div>
</body>
</html>