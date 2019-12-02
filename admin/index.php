<?php
session_start();

 ?>


<html>
<head>
  <title>
Administration
</title>
<link rel="icon" href= "https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
<style>
body{
  margin:0px;
  padding:0;


}
*{
  margin: 0;
  padding: 0;
  font-family: "Bahnschrift";
}


#header{
  width: 100%;
  height: 120px;
  background: black;
  color: white;
}
#sidebar{
width: 300px;
height: 400px;
background: #2c3e50;
color:black;
float: left;

}

#data{

  height: 700px;
  background: #bdc3c7;
}
#adminLogo
{
height:50px;
width: 50px;
}

ul li{
  padding:20px;
  border-bottom: 2px solid grey;

}

ul li:hover{
  background-color: #ecf0f1;
  transition: 0.5s ease;

}
</style>
</head>
<body>
  <div id="header">
<center><img src="../icon.png" id="adminLogo"></center>
<center>Hello <?php echo $_SESSION['admin'];?></center>
  </div>

  <div id="sidebar">
    <ul>
      <a href="add.php" style="color:black; text-decoration: none;"><li>Add User</li>
      <a href="delete.php" style="color:black; text-decoration: none;"><li>Delete User</li>
      <a href="index.php?viewdata=success" style="color:black; text-decoration: none;"><li>View all registered users</li>
      <a href="logout.php" style="color:black; text-decoration: none;"><li>Sign out</li></a>
    </ul>
  </div>

  <div id="data"><br>
    <center><h3>Data panel</h3></center>
      <?php

      if(isset($_GET['viewdata']))
      {
        if($_GET['viewdata'] == "success")
      {include 'config.php';
      $sql="SELECT `Username`, `Password`, `E-mail` FROM utilizatori";
      $res=$con->query($sql);
      if($res)
        {$x=1;
          while($row=$res->fetch_assoc())
          {
            echo "User $x credentials: " . "<br>";
            foreach ($row as $i => &$val)
            {
                if($i == 'Username')
                {echo "$i => $val"  . '<html>

                <a href="modify.php?submit3=Username"><input type="submit" name="submit3" value="Modify"></input></a>

                </html>' . "<br>";

                $_SESSION['Username'] = $val;


              }
              else if($i == 'Password')
                {
                  echo "$i => $val"  . '<html>

                  <a href="modify.php?submit3=Password"><input type="submit" name="submit3" value="Modify"></input></a>

                  </html>' . "<br>";
                  $_SESSION['Password'] = $val;

                }
                else if($i == 'E-mail')
                {
                  echo "$i => $val"  . '<html>

                  <a href="modify.php?submit3=E-mail"><input type="submit" name="submit3" value="Modify"></input></a>

                  </html>' . "<br>";
                  $_SESSION['E-mail'] = $val;
                }


            }
            echo "<br>";
            $x++;
          }
        }
      }

      }
      ?>

      </div>
</body>
</html>
