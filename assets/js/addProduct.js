function addProduct(){
    $pname = $("#pname").val();
    $category =  $("#category").val();
    $pic =  $("#pic").val();
    $location =$("#location").val();
    $price = $("#price").val();
    $contact =  $("#contact").val();
    $description =  $("#description").val();
    
   
    
      $.post("add_product2.php",{pname:$pname,category:$category,pic:$pic,location:$location,price:$price,contact:$contact,description:$description},function(data, status){
    alert("Your Save is: " + data );});
   
  
  }