<?php
session_start();
if(!isset($_SESSION['loggedin']))
  {
      echo $SESSION['username'];

  }
 ?>

<html>
<head>
  <title>Contact:Snackshack</title>
  <meta name="viewport" content="width=device-width, initial scale=1">
  <link rel="icon" href="https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">

  </head>
  <body>
    <style>
    /*stylesheet for contact page*/
    *{
    margin:0;
    padding:0;
    font-family: "Bahnschrift",sans-serif;
    }

    body
    {
      margin:0;
      padding:0;
      background-image:linear-gradient(to bottom,rgba(49, 56, 52, 0.52), rgba(49, 56, 51, 0.52)), url("5.jpg");
      background-size: cover;

    }

    .contact-section
    {
      padding:40px 0;
    }

    .contact-section h1
    {
      text-align: center;
      color: #f2f0e9;
      text-shadow: 4px 4px 4px black;
    }

    .contact-form
    {
      max-width: 600px;
      margin:auto;
      padding: 0 10px;
    overflow: hidden;
    -webkit-animation: fadein 1s;

    }

    @-webkit-keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    .contact-form-text
    {
      display: block;
      width:100%;
      box-sizing: border-box;
      margin:16px 0;
      border: 2px solid #000;
      border-radius: 5px;
      background:#111;
      padding:20px 40px;
      outline: none;
      color:#ddd;
    }

    .contact-form-text:focus
    {
      box-shadow: 0 0 10px 4px #f2f0e9;

    }

    textarea.contact-form-textarea{
      resize: none;
      height:120px;

    }
    .contact-form-btn
    {
      float:right;
      border: 0;
      background: #f2f0e9;
      color:#000;
      padding: 12px 50px;
      border-radius: 20px;
      cursor: pointer;
      transition: 0.5s;
    }

    .contact-form-btn:hover
    {
      background: #2980b9;
      color:#fff;
      transition: 0.5s ease;

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

    .avatar{
      width:50px;
      height: 50px;
      position:inherit;
      padding:0;
      margin-top: -15px;
      float:left;
    }
    .loggedin-text
    {
      text-align: center;
      font-family: "Bahnschrift";
      color:white;
      text-shadow: 4px 4px 4px black;
      }
    </style>
    <header>
        <div class="main">
          <div class="logo">
            <nav>
            <a href="altindex.php" title="Home"><img src="logo.png" height="120" width="120"></a>
          </nav>
          </div>
          <nav>
          <ul>
            <li><a href="#" title="Detalii contact">Contact</a></li>
            <li><a href="logout.php" title="Deja pleci?">Logout</a></li>
            <li><a href="rateus.php" title="Acorda-ne un feedback">Drop a star</a></li>
            <div class="avatar">
            <img src="icon.png" alt="Avatar" name="avatar" height="50" width="50">
          </div>
          </ul>
          <div class="loggedin-text">
            <h3>Logged in as: <?php echo $_SESSION['name']; ?></h3>
          </div>
        </nav>
        </div>
    </header>
    <div class="contact-section">
      <h1>Contact Us</h1>

      <form class="contact-form" action="PHPMailer/PHPMailer/emailme.php" method="post">
        <input type="text" name="firstname" class="contact-form-text" placeholder="Your Name">
        <input type="email" name="email" class="contact-form-text" placeholder="Your email">
        <textarea class="contact-form-text" name="subject" placeholder="Your message"></textarea>
        <input type="submit" name="submit" class="contact-form-btn" value="Send">
      </form>
    </div>
    <?php
    if(isset($_GET['submit']))
    {
        if($_GET['submit'] == "success")
        {
          echo '<p style="color:white; margin-left:500px;">Form sent successfully!</p>';
        }
    }
     ?>
  </body>
</html>
