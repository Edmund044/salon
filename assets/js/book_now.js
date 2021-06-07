
function add(id){
    $id = id;
    //$productImage = productImage;
    //$productName = productName;
    //$productPrice = productPrice;
    console.log(id);
    
      $.post("book.php",{id:$id},function(data, status){
    alert("Your Save is: " + data );
    
  });
    
    $.get("cartCount.php" ,function(data) {
      $("#cart").html(data);
      $("#cart2").html(data);
      $("#cart3").html(data);
    }

   // window.location.replace("index.php");
    );
   
  }