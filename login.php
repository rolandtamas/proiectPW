<?php

sleep(4);
session_start();
if(!empty($_POST['username']))
{
  if(!empty($_POST['password']))
  {$host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "webpage_users";
  $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error())
    {die('Connect error: (' . mysqli_connect_errno() .') ' . mysqli_connect_error());
    }
  if($stmt=$con->prepare('SELECT `Username`, `Password` FROM utilizatori WHERE `Username`=? '))
  {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
  }
  $stmt->store_result();

  if($stmt->num_rows>0)
  {
    $stmt->bind_result($username,$password);
    $stmt->fetch();
    if(password_verify($_POST['password'], password_hash($password,PASSWORD_DEFAULT)))
    {
      session_regenerate_id();
      $_SESSION['loggedin']=TRUE;
      $_SESSION['name'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      sleep(3);
      echo 'Welcome ' . $_SESSION['name'] . '! ';
      echo 'Flying home in three seconds..';
      echo '<html>
    <head>
        <meta http-equiv="refresh" content="3;url=altindex.php" />
    </head>
    <body>';
    }
    else {
      echo "Incorrect username or password! Wait three seconds then try again..";
      echo '<html>
    <head>
        <meta http-equiv="refresh" content="3;url=login.html" />
    </head>
    <body>';
    }
  }
  else {
    echo "Incorrect username! Wait three seconds then try again..";
    echo '<html>
  <head>
      <meta http-equiv="refresh" content="3;url=login.html" />
  </head>
  <body>';
  }
  $stmt->close();
  }

  else {
    echo "Password not inserted!";
  }
}
else {
  echo "Username not inserted!";
}
?>
