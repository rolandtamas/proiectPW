<?php

session_start();
if($_POST['submit'])
{if($_GET['submit3'] == "'E-mail'")
  {

    echo $_SESSION['E-mail'];
    echo $_POST['name'];

  }





 ?>
