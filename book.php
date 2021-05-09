<?php

include './api/config.php';
$dbObject = new Database;
//$dbObject->ifLoggedInUser();
$product_id = $_POST['id'];
$data = $dbObject->read_services("SELECT * FROM `services` WHERE   `services_id` = '$product_id'");
for ($i=0; $i < count($data) ; $i++) {  
    
    $service = $data[$i]['service_name'];
    $specialist = $data[$i]['service_type'];
    $price = $data[$i]['price'];
    $date = date('d-m-Y');


}

//$user = $_COOKIE['id_user'];
$user = '1';
$sql = "INSERT INTO `bookings`(`user_id`, `Service`, `Specialist`, `price`, `date`) VALUES ('$user','$service','$specialist','$price','$date')";
$dbObject->insert($sql);
?>