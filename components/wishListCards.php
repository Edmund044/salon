
<div class="row">
<?php 
 
     $data = $dbObject->read_wishlist("SELECT * FROM `wishlist`");
     for ($i=0; $i < count($data) ; $i++) {    
       
      ?>
   <div class="col-sm-4">
        <div class="row">
            <div class="col-6">
                <div class="card border-0 mb-1" style="width:100%;">
                    <div class="card-body">
                        <h5 class="card-title" style="width:100%;"><b><?php echo $data[$i]["wishlist_name"]?></b></h5>
                        <p class="card-text" style="width:100%;">KSH <?php echo $data[$i]["price"]?></p>
                        <a href="#" class="btn btn-primary">Book Now</a>
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