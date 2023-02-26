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
    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">
</head>
<body>

     <div class="header">
        <div class="container1">
    
            <div class="navbar">
                <div class="logo">
                   <a href="index.php"> <img src="images/Nt.png" alt="" width="50px"></a>
                </div>
            
            <nav>
                <ul id="menuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contacts</a></li>
                    <div class="btn-group">
                           <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="bi bi-person-circle"></i> <?php echo $_SESSION['session_name'];?>
                           </button>
                            <ul class="dropdown-menu">
                            <li><a href="profile.php">Profile</a></li> 
                             <li><a href="logout.php">Logout <i class="bi bi-box-arrow-right"></i></a></li> 
                            </ul>
                    </div>
                    <li><a href="profile.php"><i class="bi bi-person-check-fill"></i></a></li>
                </ul>
            </nav>
    
            <img src="images/menu.png" alt="" width="30px"  height="30px" class="menu-icon" onclick="menutoggle()">
        
           </div> 
    
        
        
         </div>
        

       <form action="demo2.php" class="stream" method="post">
           <div class="row">
               <div class="col-xl-6 col-lg-12">
                <label for="from"><i class="bi bi-cursor-fill"></i> </label>
                 
                   
                   <div class="wrapper">
                       <div class="search-input">
                   <input type="text" id="from"  placeholder="From" name="from" autocomplete="off" required>        <!---FROM--->
                     <div class="autocom-box">
                         <li>Kharagpur-KGP</li>
                         <li>Kharagpur-KGP</li>
                         <li>Kharagpur-KGP</li>
                         <li>Kharagpur-KGP</li>
                         <li>Kharagpur-KGP</li>
                     </div>
                </div>
                </div>
                
                <label for="to"><i class="bi bi-geo-alt-fill"></i> </label>
                      
                      <div class="wrapper">
                          <div class="search-input">
                      <input type="text" id="to"  placeholder="To" name="to" required>           <!---TO--->
                      <div class="autocom-box">
                          <li>Kharagpur-KGP</li>
                          <li>Kharagpur-KGP</li>
                          <li>Kharagpur-KGP</li>
                          <li>Kharagpur-KGP</li>
                          <li>Kharagpur-KGP</li>
                      </div>
                  </div>
                  </div>
                </div>
               
                   <div class="col-xl-6 col-lg-12">
               
                   <label for="section1"><i class="bi bi-briefcase-fill"></i> Classes </label>
                    <select name="classes" id="section1" class="form-select" aria-label="Default select example"  required>
                        <option value="Ac-Tier" selected>Ac tier</option>
                        <option value="Sleeper">Sleeper</option>
                        <option value="General">General</option>
                        </select>
               

                    <label for="section2"><i class="bi bi-menu-button-fill"></i> Occupation</label>
                    <select name="general" id="section2" class="form-select" aria-label="Default select example" required>
                        <option selected value="General">General</option>
                        <option value="Ladies">Ladies</option>
                        <option value="Tatkalin">Tatkalin</option>
                        <option value="Divyang">Divyang</option>
                      </select>
                </div> 
             </div>  <!--row-->
             <div class="calender">
                <label for="cal"><i class="bi bi-calendar-event-fill"></i></label>
                <input type="date" id="cal" class="date" name="cal" required>
            </div>  
            <button type="submit" class="btn btn-primary" name="search">Search</button>
            <button type="reset" class="btn btn-primary">Reset</button>

</form>


 

           </div> <!--header-->
     
    
     </div>   
     
     <!-------features--------->
       
     <h2 class="title">Features</h2>



     <!--------------footer------------->

     
     <div class="footer">
              <div class="container">

                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <a href="soon.html"><img src="images/play-store.png" alt=""></a>
                           <a href="soon.html"> <img src="images/app-store.png" alt=""></a>

                        </div>
                    </div>
                       <div class="footer-col-2">

                          <img src="images/Nt4.png" alt="" class="nt">
                          <p>Our Purpose is to Substainly Make the Pleasure and Benefits of Sports Accessible to the Many</p>

                       </div>
                         <div class="footer-col-3">
                           <h3>Useful Links</h3>
                           <ul>
                             <li><a href="soon.html">Coupons</a></li>
                             <li><a href="soon.html">Blog Post</a></li>
                             <li><a href="soon.html">Return Policy</a></li>
                             <li><a href="soon.html">Join Affiliate</a></li>
                           </ul>
                           

                         </div>
                         <div class="footer-col-4">
                            <h3>Follow Us</h3>
                            <ul>
                              <li><a href="soon.html"> Facebook</a></li>
                              <li><a href="soon.html"> Twitter</a></li>
                              <li><a href="soon.html"> Instagram</a></li>
                              <li><a href="soon.html"> Youtube</a></li>
                            </ul>
                            
 
                          </div>
 


                  </div>
                  <hr>
                  <p class="copyright">Copyright2021- BSTM</p>
              </div>
             
          </div>
 




        <!---------------------js for toggle menu------------------------>


        <script>
               
            var menuItems=document.getElementById("menuItems");
            menuItems.style.maxHeight="0px";
            function menutoggle(){
                if(menuItems.style.maxHeight=="0px")
                {
                     menuItems.style.maxHeight="200px";

                }else{
            menuItems.style.maxHeight="0px";


                }
            }
       </script>
    
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <script src="js/suggestions.js"></script>

</body>
</html>