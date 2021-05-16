<div class="container">
  <div class="py-5 text-center">
    <h3>ADD PRODUCT</h3>    
  </div>
<hr>
  <div class="row">
    
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Product Details</h4>
      <form class="needs-validation" method="POST" action="add_product.php" enctype="multipart/form-data" class="form">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Service Name</label>
            <input type="text" class="form-control" max="12" id="firstName" name="pname" placeholder="Beaded Bag"  value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Service Type</label>
             <select class="custom-select d-block w-100" name="category" required>
                   <option value="">Choose...</option>
                   <option>Massage</option>
                   <option>Manicure</option>
                   <option>Pedicure</option>
                   <option>Waxing</option>   
                   <option>Facials</option>
                   <option>Hair Care</option>
                   <option>Hair Color</option>
                   <option>Hair Treatment</option>   
                   <option>Nails</option>
                   <option>Hair Removal</option>
                   <option>Eyelash Extensions</option>        
              </select>
            <div class="invalid-feedback">
              Valid category name is required.
            </div>
          </div>
        </div>
     
        
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="country">Main picture</label>
            <input type="file" name="pic" class="form-control">
            <div class="invalid-feedback">
              Please select a valid material.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="state">Location</label>
           <input type="text" id="lname" class="form-control" name="location" placeholder="Business street opposite ABC building New york City"  required>
            <div class="invalid-feedback">
              Please provide a valid state.
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
            <label for="subject">Contact</label><br>
               <input type="text" id="lname" name="contact" class="form-control" placeholder="0700112233"  required>
            <div class="invalid-feedback">
              Gallery required.
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
        <button class="btn btn-primary btn-lg d-flex justify-content-center" type="submit" name="submit"><small>SUBMIT</small></button>
      </form>
    </div>
  </div>
</div>