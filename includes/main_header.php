<?php if(!isset($page_title)) { $page_title = 'Mamrit Farms';} ?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $page_title ;?></title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css" />

  <script>
    $(document).ready(function() {
      $('#exampleModal').modal('show');
    })
  </script>

</head>

<body class="animsition animsition" style="font-family: 'Montserrat', sans-serif;">
 
  <div class="home-1" id="page">
    <header>
      <div id="nav-new">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
          <a class="brand-logo animsition-link" href="index.php"><img src="images/Mamrit-Farms-Final-Logo.png" width="106px" height="95px" alt="Mamrit Farms"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav " style="float: right;">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="ghee.php">Ghee</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="ourfarm.php">Our Farm</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="ourfeed.php">Feed</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="investor.php">Distrubutor</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li>
                <a href="http://admin.mamritfarms.com/admin_login" class="btn btn-success"> Admin Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>