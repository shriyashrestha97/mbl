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
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
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
<!-- Photo Grid -->
<div class="row"> 

  <div class="column">
  <?php
$query =" SELECT * FROM gallary where id=3";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=1";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=2";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=4";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>

  </div>
  <div class="column">
 
<?php
$query =" SELECT * FROM gallary where id=4";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=9";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=6";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=3";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>

  </div>  
  <div class="column">
  <?php
$query =" SELECT * FROM gallary where id=4";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=1";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=2";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=3";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>

  </div>
  <div class="column">
  
<?php
$query =" SELECT * FROM gallary where id=1";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=10";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=6";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>
<?php
$query =" SELECT * FROM gallary where id=8";
$query_run = mysqli_query($con, $query);
$check_gallary= mysqli_num_rows($query_run) >0;

if($check_gallary)
{
    while($row= mysqli_fetch_array($query_run))
    {
        ?>
    <img src="admin/postimages/<?php echo($row['PostImage']);?>" style="width:100%">
    <?php
    }
}
else{
    echo"not found";
}
?>

  </div>
</div>


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