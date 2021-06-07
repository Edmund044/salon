function deleteCart(id){
    $id = id;
   
    
      $.post("deleteCart.php",{id:$id},function(data, status){
    alert("Delete is: " + data );
    window.location.replace("index.php");
  
  });
    $.get("cartCount.php" ,function(data) {
        $("#cart").html(data);
        $("#cart2").html(data);
        $("#cart3").html(data);
      });
      
  }