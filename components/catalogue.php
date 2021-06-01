<!--<div id="demo" class="carousel slide" data-ride="carousel">


  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/pexels-engin-akyurt-3065171.jpg" alt="Los Angeles"  style="width:100%;height:40rem;object-fit:cover;">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/pexels-engin-akyurt-3065170.jpg" alt="Chicago"  style="width:100%;height:40rem;object-fit:cover;">
    </div>
    <div class="carousel-item">
      <img src="./assets/images/pexels-cottonbro-3993449.jpg" alt="New York"  style="width:100%;height:40rem;object-fit:cover;">
    </div>
  </div>


  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>-->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row mb-5">
       <!-- <img class="ml-4 float-left" src="/assets/images/logo.png" alt="" width="75" height="50" style="object-fit:cover">-->
      </div>
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">THREE SISTERS SALON AND SPA</h1>
          <p data-aos="fade-up" data-aos-delay="400">The best salon in town</p>
          <div data-aos="fade-up" data-aos-delay="600">
          <!--  <nav class="navbar">
              <a href="#" routerLink="/search" routerLinkActive="active" class="btn btn-primary btn-lg m-1">Continue as a User</a>
              <a href="#" routerLink="/login-mechanic" routerLinkActive="active" class="btn btn-primary btn-lg bg-white text-primary m-1">Continue as a Mechanic</a>
            </nav>-->

          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/images/Hairdresser-pana.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<br>
<br>
<div class="container">
<div class="row">
<?php 
 
     $data = $dbObject->read_services("SELECT * FROM `services`");
     for ($i=0; $i < count($data) ; $i++) {    
       
      ?>
  <div class="col-lg-4 border">
        <div class="row">
            <div class="col-6 ">
                <div class="card border-0 mb-1" style="width:100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="width:100%;"><b><?php echo $data[$i]["service_name"]?></b></h5>
                        <p class="card-text" style="width:100%;">KSH <?php echo $data[$i]["price"]?></p>
                        <button href=""  onclick="add(<?php echo $data[$i]['services_id'];?>)" class="btn btn-primary text-light">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img src="<?php echo $data[$i]["image"]?>" style="width:100%;">
            </div> 
        </div>
   </div>
   <?php }
     
   ?>
  
</div>
</div>