<?php

session_start();
if(!isset($_SESSION['loggedin']))
{
echo "Stop";


}
else {

  $username=$_SESSION['name'];
date_default_timezone_set(date_default_timezone_get("Romania/Bucharest"));
$date = date('Y/m/d H:i:s', time());
$comment=$_POST['feedback'];
$starnumber=$_POST['rating'];
if(!empty($username))
      {
        if(!empty($comment))
          {
              $host="localhost";
              $dbusername = "root";
              $dbpassword = "";
              $dbname = "webpage_users";
              $con = new mysqli($host,$dbusername,$dbpassword,$dbname);
              if(mysqli_connect_error())
                  {
                    die("Connection failed");

                  }
              else {
                $sql = "INSERT INTO recenzii(`username`, `starnumber`,`date`,`comment`) VALUES ('$username','$starnumber','$date','$comment');";
                if($con->query($sql))
                {
                  header("Location: rateus.php?submit=success");


                }
                else {
                  echo "Error: ". $sql . "<br>" . $con->error;
                  header("Location:rateus.php?submit=failed");
                }
                $con->close();

              }


            }
            else {
              echo "No comment";
            }



          }
          else {
            echo "You are not logged in!";
          }


      }



 ?>
