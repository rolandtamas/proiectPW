<?php
session_start();
include 'config.php';
error_reporting(0);
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO utilizatori(`Username`, `Password`, `E-mail`) VALUES ('$name', '$password', '$email');";
if($_POST['submit'])
  {
    if($con->query($sql))
    {
      echo "New user added! :)";
      echo '<html>
    <head>
        <meta http-equiv="refresh" content="2;url=index.php" />
    </head>
    <body>';
    }
    else {
      echo "Error: ". $sql . "<br>" . $con->error;

    }
    $con->close();


  }

 ?>
<html>
<head>
  <title>Add
  </title>
  <style>
    *{margin: 0;
    padding: 0;
    font-family: "Bahnschrift";}
    body{
      margin: 0;
      padding: 0;
      background-color: #2c3e50;
    }
    .add{
      width: 320px;
      background-color: inherit;
      padding:40px 20px;
      box-sizing: border-box;
      position: fixed;
      left:50%;
      top: 50%;
      transform: translate(-50%,-50%);
    }
    input{width: 100%;
    background: #fff9;
    border: 2px solid #000;
    border-radius: 3px;
    padding: 5px 15px;
    box-sizing: border-box;
    margin-bottom: 15px;
          }

          input[type="submit"]
          {
            font-family: Bahnschrift;
            cursor:pointer;
          }

          input[type="submit"]:hover
          {
            background-color: #000;
            color: white;
            transition: 0.5s ease;

          }
          h2
          {
            margin-top:150px;
          }
  </style>
</head>
<body>
  <center><h2>Add user</h2>
  <form class="add" action="add.php" method="post">
    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="Username">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="email" name="email" id="email" placeholder="E-mail">
    <input type="submit" name="submit" value="Add user">
    <a href="index.php?submit=success" style="color:white; text-decoration:none;">Go back to admin panel</a>
  </form>
</body>

</html>
