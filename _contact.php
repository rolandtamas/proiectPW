<html>
<head>
  <title>Contact:Snackshack</title>
  <meta name="viewport" content="width=device-width, initial scale=1">
  <link rel="icon" href="https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
    <header>
        <div class="main">
          <div class="logo">
            <nav>
            <a href="index.html" title="Home"><img src="logo.png" height="120" width="120"></a>
          </nav>
          </div>
          <nav>
          <ul>
            <li><a href="#" title="Detalii contact">Contact</a></li>
            <li><a href="login.html" title="Login intr-un cont existent">Login</a></li>
            <li><a href="signup.html" title="Inregistreaza-te">Sign up</a></li>
          </ul>
        </nav>
        </div>
    </header>
    <div class="contact-section">
      <h1>Contact Us</h1>

      <form class="contact-form" action="PHPMailer/PHPMailer/nonemailme.php" method="post">
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
