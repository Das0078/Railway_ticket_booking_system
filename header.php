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

    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="header">
        <div class="container1">
    
            <div class="navbar">
                <div class="logo">
                   <a href="dstore.html"> <img src="images/Nt.png" alt="" width="50px"></a>
                </div>
            
            <nav>
                <ul id="menuItems">
                    <li><a href="dstore.html">Home</a></li>
                
                    <li><a href="">About</a></li>
                    <li><a href="">Contacts</a></li>
                    <li><a href="account.html">Account</a></li>
    
                </ul>
            </nav>
    
            <img src="images/menu.png" alt="" width="30px"  height="30px" class="menu-icon" onclick="menutoggle()">
        
           </div>  
          <center>
           <label for="section1"><i class="bi bi-check2-square"></i></label>
                    <select name="classes" id="section1" class="select2"  required>
                        <option selected value="N/a" disabled>All Classes</option>
                        <option value="Ac-Tier">Ac tier</option>
                        <option value="Sleeper">Sleeper</option>
                        <option value="General">General</option>
                        </select>
                        </center>
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
         
</body>
</html>

