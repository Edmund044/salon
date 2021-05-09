
function add(id){
    $id = id;
    //$productImage = productImage;
    //$productName = productName;
    //$productPrice = productPrice;
    console.log(id);
    
      $.post("book.php",{id:$id},function(data, status){
    alert("Your Save is: " + data );});
  
  
  }