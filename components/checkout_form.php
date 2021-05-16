<div clas="container">
<h2 class="d-flex justify-content-center ">Checkout Form</h2>

<div class="row m-5">
   
    <div class="row g-5">      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form  class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-sm-6">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="number" name="number" placeholder="0712345678" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>      

            <div class="col-sm-6">
              <label for="email" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="country" class="form-label">Date</label>
              <input type="date" class="form-control" name="date" id="date" placeholder="1-12-2021" required>
             
              <div class="invalid-feedback">
                Please select a valid date.
              </div>
            </div>

            

            
          </div>

          <hr class="my-4">
          <!--
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>-->

                

        
        
      </div>
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill" id="cart2"> </span>
        </h4>

        <ul class="list-group mb-3">
                      <?php 
              $price = 0;
              $data = $dbObject->read_salon_orders("SELECT * FROM `orders`");
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

          <div class="input-group">
           <!-- <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>-->
          <button class="w-100 btn btn-primary btn-lg my-2" type="submit" onclick="addCart()">Book Appointment</button>
        </form>
      </div>
    </div>
  </div>

</div>