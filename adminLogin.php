<?php include 'components/navigation.php'?>
<html lang="en">
<body  style="background-color:;">
<div class="container" style="margin-top: 10%;">
      <div class="row">
          <div class="col-sm-4">
          </div>
          <div  class="col-sm-4">
          <form method="POST" action="adminLogin2.php">
   <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal text-dark">Admin sign in</h1>

    <div class="form-floating">
    <label for="floatingInput" class="text-dark">Loin Name</label>
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
     
    </div>
    <div class="form-floating">
    <label for="floatingPassword" class="text-dark">Password</label>
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      
    </div>

     <input class="btn btn-primary mt-5 mb-3" type="submit" name="submit"  value="Login" >

    <!--<p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>-->
  </form>
          </div>
          <div  class="col-sm-4">
          </div>
      </div>
 
 </div>
</body>
 
 
</html>
