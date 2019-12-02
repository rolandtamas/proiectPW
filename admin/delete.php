<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include 'config.php';
$name = $_POST['name'];
error_reporting(E_ALL & ~E_NOTICE);
if($_POST['submit'])
{$sql = "DELETE FROM `utilizatori` WHERE `Username`=?;";
$stmt = mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  die("Error encountered ");
}
else {
  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);
  if($_POST['submit'])
    {
        echo $name . " deleted";
        echo '<html>
      <head>
          <meta http-equiv="refresh" content="2;url=index.php" />
      </head>
      <body>';

    }
    else {
      echo "Error: ". $sql . "<br>" . $con->error;

    }
    mysqli_stmt_close($stmt);
    $con->close();
}
}
 ?>
<html>
<head>
  <title>Delete
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
    .delete{
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
  <center><h2>Who do you want to delete?</h2>
  <form class="delete" action="delete.php" method="post">
    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="Username">
    <input type="submit" name="submit" value="Delete user">
    <a href="index.php" style="color:white; text-decoration:none;">Go back to admin panel</a>
  </form>
</body>

</html>
