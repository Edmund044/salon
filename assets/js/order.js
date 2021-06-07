function sendMessage(){
   
    $sender = $("#sender").val();
    $receiver =  $("#receiver").val();
    $message =  $("#message").val();
    console.log($sender);
    console.log( $receiver);
    console.log($message );
    //$productImage = productImage;
    //$productName = productName;
    //$productPrice = productPrice;
    //console.log(id);
    
     $.post("sendMessage.php",{sender:$sender,receiver:$receiver,message:$message},function(data, status){
   //alert("Your Save is: " + data );
   console.log(data);
  });

   
  }