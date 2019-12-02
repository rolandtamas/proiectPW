<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump")


 ?>


 <html>
 <head>
   <title>Reset my password</title>
   <link rel="icon" href="https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
   <link rel="stylesheet" href="style6.css">
   </head>
   <body>
     <div class="form-wrap">
     <form method="post" action="PHPMailer/PHPMailer/resets-request.inc.php">
       <div class="logo">
         <nav>
         <a href="index.html" title="Home"><img src="logo.png" height="120" width="120"></a>
       </nav>
     </div>
       <h1>Resetare parola</h1>
     <input type="text" name="email" placeholder="Your e-mail"><br /><br />
       <input type="submit" name="reset-request-submit" value="Reset my password">
       </form>

   </div>
   <?php
   if(isset($_GET['reset']))
   {
       if($_GET['reset'] == "success")
       {
         echo '<p style="color:white;">Check your email!</p>';
       }
   }
   ?>
   <p>Dupa ce ati introdus datele, veti primi un e-mail cu instructiunile necesare schimbarii parolei dumneavoastra.</p>
   </body>
   </html>
