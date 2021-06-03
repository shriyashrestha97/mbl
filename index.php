<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>MBL Fire Safety</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/logos/logo-shortcut.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="css/icomoon.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">

  
  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="css/switcher.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">


</head>
<body>


<!-- Preloader Start-->
<div id="preloader">
  <div class="row loader">
    <div class="loader-icon"></div>
  </div>
</div>
<!-- Preloader End -->


<!-- Top-Bar START -->
<div id="top-bar" class="">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-8">
        <div class="top-bar-welcome">
          <ul>
            <li>Fire Extinguishing Service</li>
          </ul>
        </div>
        <div class="top-bar-info hidden-sm-down hidden-md-down">
          <ul>
            <li><i class="fa fa-phone"></i>091-410458, 9858420739, 9858422639
            <li>
            <li><i class="fa fa-envelope"></i>info@mblfire.com.np
            <li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-4">
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/mblagni/" target="blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Top-Bar END -->


<!-- Navbar START -->
<header>
  <nav id="navigation4" class="container navigation">
    <div class="nav-header pl-3">
      <a class="nav-brand " href="#">
        <h3> MBL Fire Safety </h3>
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="#home">Home</a>
          
        </li>
        <li><a href="#about">About</a>
          
        </li>
        <li><a href="#services">Services</a>
          
        </li>
        <li><a href="gallery.php">Gallery</a>
         
        </li>

        <li><a href="#contact">Contact Us</a>
          
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Navbar END -->


  <!--==========================
    Intro Section
  ============================-->


  <?php include("slider.php")?>

  <!-- #intro -->

<!-- About us Section Start -->
<div class="section-block" id="about">
  <?php 
      $connection=mysqli_connect("localhost","firesafety","mblDhn0","firesafety_mbl");
      $query="SELECT *FROM about";
      $query_run= mysqli_query($connection,$query);

      ?>
  <div class="container">
    <div class="row">
     
      <div class="col-md-5 col-sm-6 col-12 offset-md-1">
        <div class="section-heading">
          <h5>About MBL</h5>
          <div class="section-heading-line-left"></div>
        </div>
         <?php 
          if(mysqli_num_rows($query_run)>0) {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>
        <div class="text-content mt-25">
          <p><?php echo $row['about']; ?></p>
        </div>
       
      </div>
       <div class="col-md-6 col-sm-6 col-12">
        <img src="img/gallery/about.jpg" class="mb-15-xs img-fluid" alt="map">
      </div>
    </div>
  </div>
</div>
 <?php
             

            }
          } else{
            echo"No records found";
          }

          ?>

<!-- About us Section END -->
<!-- Services Section START -->
<?php include("services.php")  ?>

<!-- Message from the director Section Start -->
<div class="section-block">
  <div class="container">
      <div class="section-heading text-center">
          <h5>Message from the director</h5>
          <div class="section-heading-line-center"></div>
        </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12 justify-content-center  text-center">
        <img src="img/gallery/dharam.jpg" height="330px" width="330px"  class="mb-15-xs img-fluid justify-content-center text-center" alt="map" >
      </div>
      <div class="col-md-5 col-sm-6 col-12 offset-md-1">
      
        <div class="text-content mt-25">
          <p>Fire safety is the set of practices planned to reduce the destruction caused by fire. Founded in, MBL Agni Suraksha is a distinguished manufacturer, exporter, and supplier of all types of fire extinguishers. At MBL Agni Suraksha, we help you understand fire risks and offer reliable fire safety products and solutions to safeguard everything you love.<br>
            <br>
             Dharam Singh Danpali <br>
            -Managing Director <br>
        </p>
        </div>
       
      </div>
    </div>
  </div>
</div>
<!-- Message from the director  Section END -->


<!-- Client Section START -->

<div class="section-block-parallax section-md"  style="background-image: url(img/gallery/1.jpg);width: 100%">
  <div class="container">
    <div class="row">
      <?php 
        $connection=mysqli_connect("localhost","firesafety","mblDhn0","firesafety_mbl");
      $query="SELECT *FROM clients";
      $query_run= mysqli_query($connection,$query);

      ?>
      <div class="col-md-5 col-sm-5 col-12">
          <?php 
          if(mysqli_num_rows($query_run)>0) {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>
        <div class="section-heading white-color mt-15">
          <span>Gain a Success with Us !</span>
          <h3>We are always Reliable !</h3>
          <div class="section-heading-line-left"></div>
        </div>
      </div>
      <div class="col-md-7 col-sm-7 col-12">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="counter-box white-color">
              <h4 class="countup"><?php echo $row['client']; ?></h4>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-12">
            <div class="counter-box white-color">
              <h4 class="countup"><?php echo $row['project']; ?></h4>
              <p>Projects Finished</p>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
 <?php
             

            }
          } else{
            echo"No records found";
          }

          ?>


<!-- Clients Carousel START -->
<div class="section-clients" id="contact" style="width: 100%">
  <div class="container">
    <div class="owl-carousel owl-theme clients" id="clients">
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=1";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=2";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=3";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=4";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=5";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=6";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=7";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=8";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?>
      </div>
      <div class="item">
      <?php
$query =" SELECT * FROM client where id=9";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
        <img src="admin/postimages/<?php echo($row['PostImage']);?>" alt="partner-image">
        <?php
    }
}
else{
    echo"not found";
}
?> 
    </div>
  </div>
</div>
<!-- Clients Carousel END -->

<!-- Client  Section END -->



<!-- Footer START -->
<?php include("footer.php") ?>



<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->


<!-- Jquery -->
<script src="js/jquery.min.js"></script>

<!--Popper JS-->
<script src="js/popper.min.js"></script>

<!-- Bootstrap JS-->
<script src="js/bootstrap.min.js"></script>

<!-- Owl Carousel-->
<script src="js/owl.carousel.js"></script>

<!-- Navbar JS -->
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>

<!-- Wow JS -->
<script src="js/wow.min.js"></script>

<!-- Countup -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>

<!-- Tabs -->
<script src="js/tabs.min.js"></script>

<!-- Isotop -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- Modernizr -->
<script src="js/modernizr.js"></script>

<!-- Switcher JS -->
<script src="js/switcher.js"></script>

<!-- Revolution Slider -->
<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src='js/revolution/revolution.addon.slicey.min.js?ver=1.0.0'></script>
<script src="js/revolution/revolution.extension.actions.min.js"></script>
<script src="js/revolution/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/revolution.extension.migration.min.js"></script>
<script src="js/revolution/revolution.extension.slideanims.min.js"></script>

<!-- Google Map -->
<script src="js/map.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>