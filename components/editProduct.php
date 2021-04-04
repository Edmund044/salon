<div class="container">
  <div class="py-5 text-center">
    <h3>EDIT PRODUCT</h3>    
  </div>
<hr>

  <div class="row">
    
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Product Details</h4>
      <form class="needs-validation" method="POST" action="addProduct.php" enctype="multipart/form-data" class="form">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Product Name</label>
            <input type="text" class="form-control" max="12" id="firstName" name="pname" placeholder="Beaded Bag"  value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Category</label>
             <select class="custom-select d-block w-100" name="category">
              <option value="">Choose...</option>
                  <option>Women</option>
                  <option>Men</option>
                   <option>Women and Men</option>
                   <option>Home Decor</option>            
              </select>
            <div class="invalid-feedback">
              Valid category name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="country">Sub Category</label>
            <select class="custom-select d-block w-100" id="country" name="material" required>
              <option value="">Choose...</option>
               <option>Asili</option>
                  <option>Sidai</option>
                   <option>Milele</option> 
                   <option>Ananse</option>
                  <option>Emporoi</option>
                   <option>Enktiti</option> 
                   <option>Kito</option>
                  <option>Murua</option>
                   <option>Safari</option> 
                   <option>Sufi</option>
                     <option>Sango</option>
                   <option>Urban Warrior</option> 
            </select>
            <div class="invalid-feedback">
              Please select a valid material.
            </div>
          </div>
           <div class="col-md-3 mb-3">
            
            <label for="state">Color</label><br>
            
           <input type="checkbox" name="colors[]" value="Teal">Teal
            <input type="checkbox" name="colors[]" value="Red">Red
            <input type="checkbox" name="colors[]" value="Blue">Blue
            <input type="checkbox" name="colors[]" value="Gold">Gold
            <br>
            <input type="checkbox" name="colors[]" value="Black">Black
            <input type="checkbox" name="colors[]" value="Green">Green
                <input type="checkbox" name="colors[]" value="Grey">Grey
            <input type="checkbox" name="colors[]" value="Brown">Brown <br>
             <input type="checkbox" name="colors[]" value="Beige">Beige
           
            
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Product Size</label>
            <select class="custom-select d-block w-100" name="size" id="state" formControlName="sth" required>
              <option value="">Choose...</option>
               <option>Small</option>
                  <option>Medium</option>
                   <option>Large</option>  
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         
        </div> 
         <div class="row">
         <div class="col-md-6 mb-3">
            <label for="subject">Quantity</label><br>
                <input type="number" value="1" min="1" class="form-control"  name="quantity">
            <div class="invalid-feedback">
              Gallery required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="subject">Availability</label><br>
            <input type="checkbox" name="days[]" value="Monday">Monday
            <input type="checkbox" name="days[]" value="Tuesday">Tuesday
            <input type="checkbox" name="days[]" value="Wednesday">Wednesday
            <input type="checkbox" name="days[]" value="Thursday">Thursday
            <br>
            <input type="checkbox" name="days[]" value="Friday">Friday
            <input type="checkbox" name="days[]" value="Saturday">Saturday
            <input type="checkbox" name="days[]" value="Sunday">Sunday
           
            </select>
          </div>
          <!--    <div class="col-sm-4">
                 <label for="country">Length</label>
                <input type="number" value="1" min="1" class="form-control"  name="length">
                <div class="invalid-feedback">
                  Please select a valid material.
                </div>
              </div>
               <div class="col-sm-4">
                 <label for="country">Width</label>
                <input type="number" value="1" min="1" class="form-control"  name="width">
                <div class="invalid-feedback">
                  Please select a valid material.
                </div>
              </div>
               <div class="col-sm-4">
                 <label for="country">Height</label>
                <input type="number" value="1" min="1" class="form-control"  name="height">
                <div class="invalid-feedback">
                  Please select a valid material.
                </div>
              </div>
         -->
        </div>    
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Main picture</label>
            <input type="file" name="pic" class="form-control">
            <div class="invalid-feedback">
              Please select a valid material.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Location</label>
           <input type="text" id="lname" class="form-control" name="location" placeholder="Business street opposite ABC building New york City"  required>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="subject">Contact</label><br>
               <input type="text" id="lname" name="contact" class="form-control" placeholder="0700112233"  required>
            <div class="invalid-feedback">
              Gallery required.
            </div>
          </div>
        </div>  
                
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Price</label>
            <input type="text" class="form-control" id="firstName" name="price" placeholder="100" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Currency</label>
             <select class="custom-select d-block w-100" name="currency">
                  <option>KSH</option>
                  <option>Euros</option>
                   <option>USD($)</option>              
              </select>
            <div class="invalid-feedback">
              Valid category name is required.
            </div>
          </div>
        </div>
        <div class="row" >
          <div class="col-md-12">
            <label for="firstName">Product Description</label>
           
    <div class=" slideanim">
      <div class="row">
        <input type="text" name="id" value="" hidden="">
      <textarea class="form-control" formControlName="comments" id="comments" name="description" placeholder="Product Description..." rows="10"></textarea><br>
    </div>
  </div>


          </div>
        </div>
      <hr class="mb-4">
        <button class="btn btn-primary btn-lg d-flex justify-content-center" type="submit" name="submit"><small>Continue to checkout</small></button>
      </form>
    </div>
  </div>
</div>