<?php
session_start();
if($_POST['submit'])
{if($_GET['submit3'] == "'Password'")
  {
    echo $_SESSION['Password'];
    echo $_POST['name'];

  }



 ?>
