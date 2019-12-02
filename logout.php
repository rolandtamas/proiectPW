<?php
  session_start();
  if(isset($_SESSION['loggedin']))
  {
      $_SESSION['loggedin'] = FALSE;
      echo "We are sad to see you leave :( ";
      echo '<html>
    <head>
        <meta http-equiv="refresh" content="3;url=index.html" />
    </head>
    <body>';


  }


 ?>
