function checkout(id){
    $id = id;
   
    
      $.post("checkout_user.php",{id:$id},function(data, status){
    alert("Checkout is: " + data );});
    $.get("cartCount.php" ,function(data) {
      $("#cart").html(data);
      $("#cart2").html(data);
      $("#cart3").html(data);
    });
    Location.reload(true);
  }