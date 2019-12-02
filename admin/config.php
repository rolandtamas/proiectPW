<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "webpage_users";

$con = new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
  {die('Connect error: (' . mysqli_connect_errno() .') ' . mysqli_connect_error());
  }


 ?>
