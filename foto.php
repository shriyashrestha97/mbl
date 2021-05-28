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
</div><header>
  <nav id="navigation4" class="container navigation">
    <div class="nav-header pl-3">
      <a class="nav-brand " href="index.php">
        <h3> MBL Fire Safety </h3>
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="#home">Home</a>
          
        </li>
        <li><a href="index.php#about">About</a>
          
        </li>
        <li><a href="index.php#services">Services</a>
          
        </li>
        <li><a href="index.php#gallary">Gallery</a>
         
        </li>

        <li><a href="index.php#contact">Contact Us</a>
          
        </li>
      </ul>
    </div>
  </nav>
</header><title>MBL Fire Safety</title>
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
	 <section id="gallary" class="py-5">
      <div class="container">
       
       

          <h1 class="text-center display-3">PHOTO GALLERY</h1>
<center>
      <center>    <p class="text-center lead">Check Out Our Photos</p>
         <div class="column">
           
          
            <div class="row ">
            
          
                <a href="#" class="item" >
                	
                  <?php  
                   $conn=mysqli_connect("localhost","firesafety","mblDhn0","firesafety_mbl");
                   
          $user_image = "SELECT image FROM imagetable";
          $result_user_image = mysqli_query($conn, $user_image);
          if($result_user_image){
            while($row = mysqli_fetch_array($result_user_image, MYSQLI_ASSOC)){
              echo "<img src='data:image/png;base64,".base64_encode($row['image']). "'>";
            }
          }
        

                   ?>
     
               
               
                </a>
           
                
              
            </div>
          </center>
             
  </section>

