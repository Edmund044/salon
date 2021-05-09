<script>

function add(id){
    $id = id;
    //$productImage = productImage;
    //$productName = productName;
    //$productPrice = productPrice;
    console.log(id);
    
      $.post("book.php",{id:$id},function(data, status){
    alert("Your Save is: " + data );});
  
  
  }
  </script>
<div class="row">
<?php 
     $param = "Hair";
     $data = $dbObject->read_services("SELECT * FROM `services` WHERE service_name LIKE '%$param%'");
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