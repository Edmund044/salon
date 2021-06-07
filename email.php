<?php include 'components/navigation.php'?>
<!doctype html>
<html lang="en">
<body  style="background-color:;">
<div class="container" style="margin-top: 10%;">
      <div class="row">
          <div class="col-sm-3">
          </div>
          <div  class="col-sm-6">
          <form method="POST" class="shadow-lg p-3 mb-5 bg-white rounded" action="email2.php">
   <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal text-dark text-center">Please your email</h1>
     Email
    <div class="form-floating">
   
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
     
    </div>
   
    <div class="d-flex justify-content-center m-3">
    <input class="btn btn-primary " type="submit" name="submit"  value="CONTINUE" >
    </div>
    <!-- <nav class="navbar">
    <p class="mt-5 mb-3 text-dark text-center" >Don't have an account?<a href="signup.php" class="text-primary fw-100"><b>Sign Up </b></a> </p><br>
    <p class="mt-5 mb-3 text-dark text-center" ><a href="forgotpassword.php" class="text-primary fw-100"><b> Forgot password?</b></a> </p>
     </nav>-->
  </form>
          </div>
          <div  class="col-sm-3">
          </div>
      </div>
 
 </div>
</body>
 
 
</html>