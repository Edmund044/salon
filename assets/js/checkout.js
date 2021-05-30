function checkout(id){
    $id = id;
   
    
      $.post("checkout.php",{id:$id},function(data, status){
    alert("Delete is: " + data );});
    $.get("cartCount.php" ,function(data) {
        $("#cart").html(data);
        $("#cart2").html(data);
      
      });
  
  }