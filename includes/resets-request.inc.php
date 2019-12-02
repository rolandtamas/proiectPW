<?php


if(isset($_POST['reset-request-submit']))
{
   $selector = bin2hex(mt_rand());
   $token = mt_rand();


   $url = "proiect/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

   $expires = date("U") + 1800;

   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "webpage_users";
   $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
   if(!$con)
   {
     die("Connection failed: " . mysqli_connect_error());
   }
   else {
     $userEmail = $_POST["email"];

     $sql = "DELETE FROM `pwdReset` WHERE `pwdResetEmail`=?;";
     $stmt = mysqli_stmt_init($con);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
       die("Error encountered ");
     }
     else {
       mysqli_stmt_bind_param($stmt, "s", $userEmail);
       mysqli_stmt_execute($stmt);
     }
     $sql = "INSERT INTO `pwdReset` (`pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES (?,?,?,?); ";
     $stmt = mysqli_stmt_init($con);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
       die("Error encountered ");
     }
     else {
       $hashedToken = password_hash($token, PASSWORD_DEFAULT);
       mysqli_stmt_bind_param($stmt, "ssss", $userEmail,$selector, $hashedToken,$expires);
       mysqli_stmt_execute($stmt);
     }

     mysqli_stmt_close($stmt);
     $to = $userEmail;
     $subject = "Reset your password";
     $message = '<p>Acceseaza urmatorul link pentru a-ti reseta parola: </p>';
     $message .= '<a href="../../' . $url . '">' . $url . '</a></p>';

    $headers = "From: testmail4contactpage@gmail.com\r\n";
    $headers .= "Reply-To: testmail4contactpage@gmail.com";
    $headers .= "Content-type: text/html\r\n";

    if(mail($to,$subject,$message,$headers))
     {header("Location: ../forgotpassword.php?reset=success");}
     else {
       header("Location: ../forgotpassword.php?reset=failed");
     }
   }

}
else {
    header("Location: ../index.html");
}
