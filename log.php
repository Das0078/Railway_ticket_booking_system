<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="log.css">
  

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-log">
         <div class="card">
             <div class="inner-box" id="card">
                 <div class="card-front">
                     <h2>LOGIN</h2>  
                      <form action="" class=from-log method="POST"> 
                             <input type="text" class="input-box" placeholder="username" required name="name">
                             <input type="password" class="input-box" placeholder="Password" required name="password">
                               <button type="submit" class="submit-btn" name="log">Submit</button>  
                                <input type="checkbox" required><span>Remember Me</span>
                      </form>
                       <button type="button" class="btn" onclick="openingRegister()">I'm new here</button>
                       <a href="new-pass.html">Forgor Password</a>
                 </div>
                 <div class="card-back">
                    <h2>REGISTER</h2>
                    <form action="user-reg.php" class=from-log method="POST"> 
                        <input type="text" class="input-box" placeholder="Your name" required name="name">
                        <input type="email" class="input-box" placeholder="Email address" required name="email">
                        <input type="password" class="input-box" placeholder="Password" required name="password">
                          <button type="submit" class="submit-btn" value="submit" name="reg">Submit</button>  
                           <input type="checkbox" required><span>Remember Me</span>
                    </form>
                 
                  
           
                  <button type="button" class="btn" onclick="openingLogin()">I've an account</button>
                  <a href="new-pass.html">Forgor Password</a>
                 </div> 
              </div>   
           </div>
         </div>
       

    </div>
        
    <script>
        var card=document.getElementById("card");

        function openingRegister(){
            card.style.transform="rotateY(-180deg)";
        }
        function openingLogin(){
            card.style.transform="rotateY(0deg)";
        }
 
    </script>


</body>
</html>