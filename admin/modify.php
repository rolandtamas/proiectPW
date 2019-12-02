<?php
  session_start();
  error_reporting(E_ALL & ~E_NOTICE);
  include 'config.php';


   ?>
  <html>
  <head>
    <title>Modify
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
      .modify{
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
    <center><h2>Modify Credentials</h2>
    <form class="modify" action="modifyuser.php?submit3='<?php echo $_GET['submit3']; ?>'" method="post">
      <input type="text" name="oldname" id="oldname" value="<?php echo $_SESSION[$_GET['submit3']];?>">
      <input type="text" name="name" id="name" placeholder="New credentials here">
      <input type="submit" name="submit" value="Modify">
      <a href="index.php" style="color:white; text-decoration:none;">Go back to admin panel</a>
    </form>
  </body>

  </html>
