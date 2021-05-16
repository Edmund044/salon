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
 $user =  $_COOKIE['id'];
$sql = "INSERT INTO `orders`(`user_id`, `service`, `specialist`, `price`) VALUES ('$user','$service','$specialist','$price')";
$dbObject->insert($sql);
?>