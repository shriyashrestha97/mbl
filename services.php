<!-- Services Section START -->
<div class="section-block" id="services">
  <?php 
      $connection=mysqli_connect("localhost","firesafety_mbl","Danpali0","firesafety_mbl");
      $query="SELECT *FROM services";
      $query_run= mysqli_query($connection,$query);

      ?>
  <div class="container1">
    <div class="section-heading center-holder">
      <span>Explore Our Services</span>
      <h3>Our Professional Services</h3>
      <div class="section-heading-line"></div>
    </div>
    <div class="row  text-justify " style="color: black">
       <?php 
          if(mysqli_num_rows($query_run)>0) {
            while($row=mysqli_fetch_assoc($query_run))
            {
              ?>
      <div class="col-md-4 col-sm-6 col-12">

        <div class="feature-flex">
          <div class="clearfix">
            <div class="feature-flex-icon">
             <i class="fa fa-fire-extinguisher"></i>
            </div>
             
            <div class="feature-flex-content">
              <h4><a href="#"><?php echo $row['service']; ?></a></h4>
              <p><?php echo $row['description']; ?> </p>
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

     


<!-- Services Section END -->