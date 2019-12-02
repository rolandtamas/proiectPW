<?php
session_start();

if(!isset($_SESSION['loggedin']))
  {
    echo "h";


  }


 ?>

 <html lang="ro" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Ratings</title>
     <link rel="icon" href= "https://img.icons8.com/office/16/000000/hamburger.png" type="image/x-icon">
     <script src="https://kit.fontawesome.com/3b4c5eaa52.js" crossorigin="anonymous"></script>
     <style>

     .star-rating {
    direction: rtl;
    display: inline-block;

    margin-left: 60px;

}

.star-rating input[type=radio] {
    display: none;
}

.star-rating label {
    color: #bbb;
    font-size: 30px;
    padding: 0;
    cursor: pointer;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.star-rating label:hover,
.star-rating label:hover ~ label,
.star-rating input[type=radio]:checked ~ label {
    color: #f2b600
}

.feedback-text{


  margin-top:50px;
  text-align: center;
  padding: 0 20px;

}

textarea.feedback{
  height:150px;
  width: 100%;
  resize: none;
  margin:16px 0;
  border: 2px solid #000;
  border-radius: 5px;
  background:#1119;
  padding:20px 40px;
  outline: none;
  color:#ddd;

}

.sendfeedback{


  float:center;
  border: 0;
  background: #f2f0e9;
  color:#000;
  padding: 12px 50px;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.5s;
}

.sendfeedback:hover{

  background: #2980b9;
  color:#fff;
  transition: 0.5s ease;

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
  left: 20%;
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
.loggedin-text
{
  text-align: center;
  font-family: "Bahnschrift";
  color:white;
  text-shadow: 4px 4px 4px black;
  }

     </style>
   </head>
   <body>

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
             <li><a href="#" title="Acorda-ne un feedback">Drop a star</a></li>
           </ul>
           <div class="avatar">
           <img src="icon.png" alt="Avatar" name="avatar" height="50" width="50">
         </div>
         <div class="loggedin-text">
           <h3>Logged in as: <?php echo $_SESSION['name']; ?></h3>
         </div>
         </nav>
         </div>

       </div>
       <form class="feedback" action="rating.php" method="post">

       <div class="feedback-text">
         <textarea class="feedback" name="feedback" id="feedback" placeholder="Your feedback here"></textarea>
         <input type="submit" name="submit" id="submit" class="sendfeedback" value="Give feedback">

       </div>

		<div class="star-rating">
			<input id="star-5" type="radio" name="rating" value="5">
			<label for="star-5" >
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-4" type="radio" name="rating" value="4">
			<label for="star-4" >
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-3" type="radio" name="rating" value="3">
			<label for="star-3" >
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-2" type="radio" name="rating" value="2">
			<label for="star-2">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-1" type="radio" name="rating" value="1">
			<label for="star-1">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
		</div>
    <?php
     {
       echo "<br />";
       echo "<br />";
      $con= new mysqli("localhost","root","","webpage_users");
      if(mysqli_connect_error())
          {
            die("Connection failed");

          }
      else {
            $sql="SELECT * FROM recenzii ORDER BY date DESC";
            $res=$con->query($sql);
            if($res)
              {
                while($row=$res->fetch_assoc())
                {
                  foreach ($row as $i => $val) {
                    switch ($val) {
                      case 4:
                        echo '<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>
<body>

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

</body>
</html>';
                        break;
                        case 3:
                          echo '<html>
                        <head>
                        <!-- Font Awesome Icon Library -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <style>
                        .checked {
                        color: orange;
                        }
                        </style>
                        </head>
                        <body>

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        </body>
                        </html>';
                          break;

                          case 2:
                            echo '<html>
    <head>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .checked {
      color: orange;
    }
    </style>
    </head>
    <body>


    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>

    </body>
    </html>';
                            break;
                            case 1:
                              echo '<html>
                            <head>
                            <!-- Font Awesome Icon Library -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <style>
                            .checked {
                            color: orange;
                            }
                            </style>
                            </head>
                            <body>


                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            </body>
                            </html>';
                              break;

                              case 5:
                                echo '<html>
        <head>
        <!-- Font Awesome Icon Library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .checked {
          color: orange;
        }
        </style>
        </head>
        <body>

        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>

        </body>
        </html>';
                                break;




                      default:
                        echo "Illegal";
                        break;
                    }
                    echo "  " . "$val <br />";
                  }

                  echo "<br />";

                }

              }
    }


    }


     ?>

  </form>




  </body>
   </html>
