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
    <link rel="stylesheet" href="ticket.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,100&display=swap" rel="stylesheet">
     
</head>
<body>
   


    <?php
    
    

    include "config.php";

    $sql3="SELECT * FROM user_input2 where id=1";
    $result3= mysqli_query($conn, $sql3) or die("query unsuccessful");
    $row3=mysqli_fetch_assoc($result3);
    

    $sql5="SELECT * FROM `t_fair1` WHERE id=1";  
    $result5= mysqli_query($conn, $sql5) or die("query unsuccessful");
    $row5=mysqli_fetch_assoc($result5);

    $sql1="SELECT * FROM payment_info2 where id=1"; 
    $result1= mysqli_query($conn, $sql1) or die("query unsuccessful");
    $row1=mysqli_fetch_assoc($result1);
    
    if(isset($_POST['pay']))
    {
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations!</strong> Your payment has successfully completed.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

      $sql="UPDATE `payment_info2` SET `Status`='PAID' WHERE 1";
      $result=mysqli_query($conn,$sql) or die("query failed");
    }
    ?>

    <div class="container">
       <div class="head1"><h5><b><u>Nested train's e-Ticketing Services </u></b></h3></div>
        <div class="head2"><h5><b><u>Electronic Reservation Slip (Personal User) </u></b></h3></div>

            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <ul>
                        <li> This ticket will only be valid with an ID proof in original. If found travelling without ID Proof, Passenger will be treated 
                            as without ticket and charged as per extant Railway rules. </li>
                        <li>At least one passenger should travel with his/her ID card in original which is indicated on the ERSIVRM. In case he/she is not traveling, 
                            all other passenger(s) booked on that ticket, 
                            if found travelling in train will be treated as travelling without ticket and charged accordingly.</li>
                        <li>Valid IDs to be presented during train journey by one of the passenger booked on an e-ticket :- 
                            Voter Identity Card / Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt/ Public Sector Undertakings of State / 
                            Central Government ,District Administrations, Municipal bodies and Panchayat Administrations which are having serial number / Student Identity Card with photograph 
                            issued by recognized School or College for their students / Nationalized Bank Passbook with photograph /Credit Cards issued by Banks with laminated 
                            photograph/Unique Identification Card "Aadhaar. </li>
                        <li>General rules/ Information for e-ticket passenger have to be studied by the customer for cancellation & refund.</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <img class="logo" src="images/Nt.png" alt="">
                </div>
            </div>
            <table border="1px" class="tab-1">
                <tr>
                    <td><b>PNR No:</b><p>4568395834757</p></td>
                    <td><b>Train No. & Name: </b><p>17878/TEJAS EXP</p></td>
                    <td><b>Quota: </b><p><?php echo $row3['occup']; ?></p></td>
                </tr>
                <tr>
                    <td><b>Transaction ID:</b><p>10003757497540500</p></td>
                    <td><b>Date & Time of Booking: </b><p><?php echo date("d-m-Y")." ". date("h.i A")?></p></td>
                    <td><b>Class: </b><p><?php echo $row3['class']; ?></p></td>
                </tr>
                <tr>
                    <td><b>From:</b><p><?php echo $row3['board']; ?></p></td>
                    <td><b>To: </b><p><?php echo $row3['destination']; ?></p></td>
                    <td><b>Date & Time of train: </b><p><?php echo $row3['calen']." 2.30 AM"; ?></p></td>
                </tr>
                
          </table>
          <h5>FARE DETAILS:</h5>
          <table border="1px" class="tab-1">
                <tr>
                <td><b>Ticket Fare</b><p>&#8377; <?php echo $row5['price'] ;?></p></td>
                    <td><b>Quantity of sit's: </b><p><?php echo $row1['sit_num']; ?></p></td>
                    <td><b>Total: </b><p>&#8377; <?php echo $row5['price']* $row1['sit_num']; ?></p></td>
                </tr>
                
          </table>
          <h5>PASSENGER DETAILS:</h5>
          <table border="1px" class="tab-1">
                <tr>
                <td><b>Customer Name:</b><p><?php echo $row1['Fname']." ".$row1['Mname']." ".$row1['Lname'];?></p></td>
                    <td><b>Contact No: </b><p><?php echo $row1['phone']; ?></p></td>
                    <td><b>Address: </b><p><?php echo $row1['addr']; ?></p></td>
                </tr>
                
          </table>
          <p>* This ticket is booked on a personal user ID and cannot be sold by an agent. If bought from an agent by any invidual, it is at his/her own risk.</p>
          <p>* Thanks for using "Nested_train" for make your journey unforgiveable. We are wishing you a happy and safe journey.</p>
          <button type="submit" class="btn btn-primary" name="search">Save & Exit</button>
    </div>
    
    

    <script src="js/bootstrap.js"></script>
</body>
</html>