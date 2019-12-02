<?php

  if (isset($_POST['reset-password'])) {
    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['password'];
    $expires = date("U") + 1800;
    $passwordRepeat = $_POST['password-repeat'];
    if(empty($password) || empty($passwordRepeat))
    {
      echo "Password Empty";
      sleep(3);
      header("Location: ../login.html");


    }

    else if ($password != $passwordRepeat) {
      header("Location: ../login.html");
    }
    $currentDate = date("U");
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
      $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires>=?";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
          echo "Error encountered";
          exit();
      }
      else {
        $currentDate = date("U");
        mysqli_stmt_bind_param($stmt,"si",$selector,$currentDate);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
          echo "You need to resubmit your request!";
          exit();
        }
        else {
          $tokenBin = hex2bin($validator);
          $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

          if ($tokenCheck === false) {
            echo "Wrong token";
            exit();
          }
          else if ($tokenCheck === true) {
            $tokenEmail = $row['pwdResetEmail'];
            $sql = "SELECT * FROM `utilizatori` WHERE `E-mail`=?;";
            $stmt = mysqli_stmt_init($con);
            if(mysqli_stmt_prepare($stmt, $sql) == false) {

              echo "Error encountered!";
              exit();

            }
            else {
              mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if(!$row = mysqli_fetch_assoc($result))
              {
                echo "There was an error";
                exit();
              }
              else {
                  $sql = "UPDATE `utilizatori` SET `Password`=? WHERE `E-mail`=?;";
                  $stmt = mysqli_stmt_init($con);
                  if (!mysqli_stmt_prepare($stmt,$sql)) {
                    echo "Error encountered!! ";
                    exit();
                  }
                  else {
                    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                    if(password_verify($_POST['password'],$newPwdHash))
                    {mysqli_stmt_bind_param($stmt,"ss",$password, $tokenEmail);
                    mysqli_stmt_execute($stmt);}

                    $sql = "DELETE FROM `pwdReset` WHERE `pwdResetEmail`=?;";
                    $stmt = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                      echo "Error encountered!!! ";
                      exit();
                    }
                    else {
                      mysqli_stmt_bind_param($stmt,"s",$userEmail);
                      mysqli_stmt_execute($stmt);
                      echo "You have successfully reset your password!";
                      echo '<html>
                    <head>
                        <meta http-equiv="refresh" content="3;url=../login.html" />
                    </head>
                    <body>';
                    }
              }
            }
          }
        }
      }
    }
  }
}
?>
