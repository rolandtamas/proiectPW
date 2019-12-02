<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
session_start();


 ?>


 <html>
 <head>
   <title><?php echo $_SESSION['name']; ?>'s profile</title>
   <link rel="icon" href="https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
   <link rel="stylesheet" href="style6.css">
   </head>
   <body>
     <div class="form-wrap">
     <form method="post" action="modifycredentials.php" enctype="multipart/form-data">
       <div class="logo">
         <nav>
         <a href="altindex.php" title="Home"><img src="logo.png" height="120" width="120"></a>
       </nav>
     </div>
       <h1>Profile management</h1>
     <input type="text" name="changename" placeholder="Schimba numele aici"><br />
     <input type="password" name="changepassword" placeholder="schimba parola aici"><br />

       
       <input type="submit" name="savechanges" value="Salveaza modificari">
       </form>

   </div>
   <?php

   ?>
   </body>
   </html>
