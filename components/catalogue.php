<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
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

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<br>
<br>
<div class="row">
<?php 
 
     $data = $dbObject->read_services("SELECT * FROM `services`");
     for ($i=0; $i < count($data) ; $i++) {    
       
      ?>
  <div class="col-sm-4">
        <div class="row">
            <div class="col-6">
                <div class="card border-0 mb-1" style="width:100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="width:100%;"><b><?php echo $data[$i]["service_name"]?></b></h5>
                        <p class="card-text" style="width:100%;">KSH <?php echo $data[$i]["price"]?></p>
                        <button href=""  onclick="add(<?php echo $data[$i]['services_id'];?>)" class="btn btn-primary">Book Now</button>
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