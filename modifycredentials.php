<?php
session_start();
if(isset($_POST['savechanges']))
  {
    $username = $_POST['changename'];
    $currentuser = $_SESSION['name'];
    $password = $_POST['changepassword'];
    if(!empty($username))
      {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "webpage_users";
        $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
          {die('Connect error: (' . mysqli_connect_errno() .') ' . mysqli_connect_error());
          }
        else {

          $sql = "UPDATE `utilizatori` SET `Username`=? WHERE `Username`=?;";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
              echo "Error encountered!! ";
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt,"ss",$username, $currentuser);
              mysqli_stmt_execute($stmt);
            echo "Changes saved! Login again so changes can be applied :)";
            echo '<html>
          <head>
              <meta http-equiv="refresh" content="3;url=login.html" />
          </head>
          <body>';
        }
          }
        }

      if(!empty($password))
        {
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "webpage_users";
          $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
          if(mysqli_connect_error())
            {die('Connect error: (' . mysqli_connect_errno() .') ' . mysqli_connect_error());
            }
          else {
            $currentpassword = $_SESSION['password'];
            $sql = "UPDATE `utilizatori` SET `Password`=? WHERE `Password`=?;";
              $stmt = mysqli_stmt_init($con);
              if (!mysqli_stmt_prepare($stmt,$sql)) {
                echo "Error encountered!! ";
                exit();
              }
              else {
                mysqli_stmt_bind_param($stmt,"ss",$password, $currentpassword);
                mysqli_stmt_execute($stmt);
              echo "Changes saved! Login again so changes can be applied :)";
              echo '<html>
            <head>
                <meta http-equiv="refresh" content="3;url=login.html" />
            </head>
            <body>';
          }
            }
          }



              }

 ?>
