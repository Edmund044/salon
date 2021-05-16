<?php
include './api/config.php';
$dbObject = new Database;
  //media
  if(isset($_POST["submit"])){
    $filetmp=$_FILES["pic"]["tmp_name"];
    $filename=basename($_FILES["pic"]["name"]);
    $filepath="./assets/images/".$filename;
    move_uploaded_file($filetmp,$filepath);   
    
    $location=$_POST['location'];
    $contacts=$_POST['contact'];
    $pname=$_POST['pname'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    date_default_timezone_set("Africa/Nairobi");
    $leo=date("F j, Y, g:i a");
    $day=date("d");
    $month=date("m");
    $year=date("Y");
    $time=date("h:i:sa");
     //echo json_encode(unserialize($colors));
  
  $sql = "INSERT INTO `services`(`service_name`, `service_type`, `price`, `image`, `contact`, `description`, `location`) VALUES ('$pname','$category','$price','$filepath','$contacts','$description','$location')";
  $result = $dbObject->insert($sql);
  
  
  }

?>