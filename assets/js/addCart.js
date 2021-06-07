function addCart(){
    $name = $("#name").val();
    $number =  $("#number").val();
    $email =  $("#email").val();
    $date =$("#date").val();
   
    
      $.post("cart2.php",{name:$name,number:$number,email:$email,date:$date},function(data, status){
    alert("Your Save is: " + data );
  
  });
    
  
  }