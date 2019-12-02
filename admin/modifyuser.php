<?php
session_start();
include 'config.php';
if($_POST['submit'])
{if($_GET['submit3'] == "'Username'")
  {
    $name = $_POST['name'];
    $oldname = $_POST['oldname'];
    $sql = "UPDATE `utilizatori` SET `Username`=? WHERE `Username`=?;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      echo "Error encountered!! ";
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt,"ss",$name, $oldname);
      mysqli_stmt_execute($stmt);

      echo "Changes applied successfully! ";
      echo '<html>
      <head>
          <meta http-equiv="refresh" content="3;url=index.php" />
      </head>
      <body>
      </body>
      </html>
      ';
    }

  }


  if($_GET['submit3'] == "'Password'")
    {
      $name = $_POST['name'];
      $oldname = $_POST['oldname'];
      $sql = "UPDATE `utilizatori` SET `Password`=? WHERE `Password`=?;";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt,$sql)) {
        echo "Error encountered!! ";
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt,"ss",$name, $oldname);
        mysqli_stmt_execute($stmt);

        echo "Changes applied successfully! ";
        echo '<html>
        <head>
            <meta http-equiv="refresh" content="3;url=index.php" />
        </head>
        <body>
        </body>
        </html>
        ';
      }

    }


    if($_GET['submit3'] == "'E-mail'")
      {
        $name = $_POST['name'];
        $oldname = $_POST['oldname'];
        $sql = "UPDATE `utilizatori` SET `E-mail`=? WHERE `E-mail`=?;";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
          echo "Error encountered!! ";
          exit();
        }
        else {
          mysqli_stmt_bind_param($stmt,"ss",$name, $oldname);
          mysqli_stmt_execute($stmt);

          echo "Changes applied successfully! ";
          echo '<html>
          <head>
              <meta http-equiv="refresh" content="3;url=index.php" />
          </head>
          <body>
          </body>
          </html>
          ';
        }
      }

}


 ?>
