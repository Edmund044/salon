function checkout(id){
    $.post("checkout_user.php",function(data, status){
    alert("Checkout is: " + data );
    window.location.replace("index.php");
  });
    $.get("cartCount.php" ,function(data) {
      $("#cart").html(data);
      $("#cart2").html(data);
      $("#cart3").html(data);
    }
    );
  
  }