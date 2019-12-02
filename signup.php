<?php

  $username = $_POST["username"];
  $password = $_POST["password"];
  $confpass = $_POST["confirm"];
  $email = $_POST["email"];
  if(!empty($username))
  {
    if(!empty($password))
    {
      if(!empty($email))
    {if(!empty($confpass))
    {$host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "webpage_users";
    $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error())
      {die('Connect error: (' . mysqli_connect_errno() .') ' . mysqli_connect_error());
      }
      else {
        if($confpass != $password)
        {
          echo "Passwords do not match!";
          die();
        }
        $sql = "INSERT INTO utilizatori(`Username`, `Password`, `E-mail`) VALUES ('$username', '$password', '$email')";
        if($con->query($sql))
        {

          echo "Welcome new user! :)";
          echo '<html>
        <head>
            <meta http-equiv="refresh" content="3;url=index.html" />
        </head>
        <body>';
        }
        else {
          echo "Error: ". $sql . "<br>" . $con->error;

        }
        $con->close();
      }
      }
      else {
        echo "You have to confirm your password";
      }
    }
    else {
      echo "Email not inserted";
      die();
    }
    }
    else {
      echo "Password not inserted";
      die();
    }
    }

    else {
     echo "Username not inserted! ";
     die();
    }
 ?>
