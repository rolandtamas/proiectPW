<!---Index page for those who have logged in --->
<?php
session_start();


 ?>
<html lang="ro" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snackshack: mancare uimitor de buna</title>
    <link rel="icon" href= "https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
  </head>
  <body>
    <style>
    /*stylesheet for the loggedin homepage*/
    #map {
      height: 400px;  /* The height is 400 pixels */
      width: 60%;  /* The width is the width of the web page */
      margin: 0;
      padding: 0;
      border: 5px solid #000;
      resize: both;
      position: inherit;
      top:23%;
      left: 20%;
     }

    *{
      margin:0;
      padding:0;
      font-family:"Bahnschrift";

    }

    body{
      margin:0;
      padding:0;
        background-image:linear-gradient(to bottom,rgba(49, 56, 52, 0.52), rgba(49, 56, 51, 0.52)), url("7.jpg");
background-size: cover;
  background-position: center;
    }

    header{

      height: 130vh;
    }




    nav{
    width:100%;
    height:60px;
    background-color: #0005;
    line-height: 20px;
    }

    nav ul{
    float:right;
    margin-right: 30px;

    }

    nav ul li{

      display: inline-block;

    }
    nav ul li a{
      text-decoration: none;
      color: #fff;
      padding:5px 20px;
      border:1px solid;
      border-radius: 10px;
      margin: 0 10px;
      transition: 0.5s ease;
    }

    ul li a:hover
    {
      background-color: #fff;
      color:#000;

    }

    .logo img
    {float:left;
    margin-left: 25px;
    }


    .title{
      position: absolute;
      top:30%;
      bottom:50%;
      left: 30%;
      color:white;

    }

    .avatar{
      width:50px;
      height: 50px;
      position:inherit;
      padding:0;
      margin-top: -15px;
      float:right;
    }
    .avatar img
    {
      vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;


    }


    .loggedin-text
    {
      text-align: center;
      font-family: "Bahnschrift";
      color:white;
      text-shadow: 4px 4px 4px black;
      }

      .controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#search-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 50%;
}
#search-input:focus {
    border-color: #4d90fe;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 120px;
  margin-top: 210px;
  margin-left: 120px;
  text-align: center;
  font-family: "Bahnschrift";
  display: inline-block;
  padding: 5px 5px;
}

.price {
  color: white;
  padding-top: 3px;
  padding-bottom: 3px;
  font-size: 16px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
    /*pana aici a fost pagina de home */

    </style>

      <header>
          <div class="main">
            <div class="logo">
              <nav>
              <a href="altindex.php" title="Home"><img src="logo.png" height="120" width="120"></a>
            </nav>
            </div>
          <div class="container">
            <nav>
            <ul>
              <li><a href="contact.php" title="Detalii contact">Contact</a></li>
              <li><a href="logout.php" title="Deja pleci?">Logout</a></li>
              <li><a href="rateus.php" title="Acorda-ne un feedback">Drop a star</a></li>
            </ul>
            <div class="avatar">
            <a href="profile.php" title="Profilul tau"><img src="icon.png" height="50" width="50"></a>
          </div>
          <div class="loggedin-text">
            <h3>Logged in as: <?php echo $_SESSION['name']; ?></h3>
          </div>
          </nav>
          </div>
          <div class="restaurants">
            <div class="card">
              <img src="brandlogos\mcdonalds.png" style="width:100%">
                <h2>McDonalds</h2>
                <p class="price">$$</p>
                <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/mcdonalds.php';">View Menu</button></p>
              </div>
              <div class="card">
                <img src="brandlogos\kfc.png" style="width:100%">
                  <h2>KFC</h2>
                  <p class="price">$$</p>
                  <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/kfc.php';">View Menu</button></p>
                </div>
                <div class="card">
                  <img src="brandlogos\taco.png" style="width:100%">
                    <h2>Taco Bell</h2>
                    <p class="price">$$$</p>
                    <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/tacobell.php';">View Menu</button></p>
                  </div>
                  <div class="card">
                    <img src="brandlogos\starbucks.png" style="width:100%">
                      <h2>Starbucks</h2>
                      <p class="price">$$$</p>
                      <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/starbucks.php';">View Menu</button></p>
                    </div>

                    <div class="card">
                      <img src="brandlogos\pizza.png" style="width:100%">
                        <h2>Pizza Hut</h2>
                        <p class="price">$$$</p>
                        <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/pizzahut.php';">View Menu</button></p>
                      </div>
                      <div class="card">
                        <img src="brandlogos\noodle.jpg" style="width:100%">
                          <h2>Noodle Pack</h2>
                          <p class="price">$$</p>
                          <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/noodlepack.php';">View Menu</button></p>
                        </div>
                        <div class="card">
                          <img src="brandlogos\spartan.png" style="width:100%">
                            <h2>Spartan</h2>
                            <p class="price">$$</p>
                            <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/spartan.php';">View Menu</button></p>
                          </div>
                          <div class="card">
                            <img src="brandlogos\mesopotamia.png" style="width:100%">
                              <h3>Mesopotamia</h3>
                              <p class="price">$$</p>
                              <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/mesopotamia.php';">View Menu</button></p>
                            </div>
                            <div class="card">
                              <img src="brandlogos\saladbox.jpg" style="width:100%">
                                <h3>Saladbox</h3>
                                <p class="price">$$</p>
                                <p><button name="submit" type="submit" onclick="window.location.href = '/proiect/orderpage/saladbox.php';">View Menu</button></p>
                              </div>
          </div>
        </div>

      </header>
      <div class="title">
        <h2>Bine ai venit! Alege restaurantul dorit.</h2>
      </div>


  </body>
</html>
