<?php include 'components/navigation2.php'?>
<div clas="container">
<h2 class="d-flex justify-content-center ">Client Orders</h2>

<div class="row m-5">
   
      
     
      <div class="col-md-12 col-lg-12 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Orders</span>
          <span class="badge bg-primary rounded-pill" id="cart2"> </span>
        </h4>

        <ul class="list-group mb-3">
                      <?php 
              $price = 0;
              $data = $dbObject->read_salon_orders("SELECT * FROM `orders` WHERE `user_id`='".$_GET['data']."'");
              for ($i=0; $i < count($data) ; $i++) {?> 
                <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><?php echo $data[$i]["service"]?></h6>
                  <small class="text-muted"><?php echo $data[$i]["specialist"]?></small>
                </div>
                <span class="text-muted">KSH <?php echo $data[$i]["price"]?></span>
              </li>
                
                <?php
                $price += $data[$i]["price"];
              }
                ?>
      
         <!-- <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>-->
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (KSH)</span>
            <strong><?php echo $price;?></strong>
          </li>
        </ul>

          <div class="input-group d-flex justify-content-center">
           <!-- <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>-->
          <button class="w-40 btn btn-primary btn-lg my-2" type="submit" onclick="addCart()">Checkout Client</button>
       
      </div>
    </div>
  

</div>