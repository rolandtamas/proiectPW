 <html>
 <head>
   <title>Reset my password</title>
   <link rel="icon" href="https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
   <link rel="stylesheet" href="style6.css">
   </head>
   <body>
     <div class="form-wrap">
     <form method="post" action="includes/resets-request.inc.php">

       </form>

   </div>

   <?php
   $selector = $_GET['selector'];
   $validator = $_GET['validator'];

   if (empty($selector) || empty($validator)) {
     echo "Validation failed";
   }
   else {
     if (ctype_xdigit($selector) !==false && ctype_xdigit($validator) !== false) {
       ?>

       <div class="form-wrap">
       <form action="includes/reset-password.inc.php" method="post">
         <div class="logo">
           <nav>
           <a href="index.html" title="Home"><img src="logo.png" height="120" width="120"></a>
         </nav>
       </div>
         <h1>Resetare parola</h1>
         <input type="hidden" name="selector" value="<?php echo $selector; ?>">
         <input type="hidden" name="validator" value="<?php echo $validator; ?>">
       <input type="password" name="password" placeholder="Your new password"><br /><br />
       <input type="password" name="password-repeat" placeholder="Confirm password"><br /><br />
       <input type="submit" name="reset-password" value="Reset my password">




       </form>
     </div>

       <?php
     }
   }

?>
