//function update(param,id) {
    $( document ).ready(function() {  
       
    $.get("cartCount.php" ,function(data) {
      $("#cart").html(data);
      $("#cart2").html(data);
    
    });
  });