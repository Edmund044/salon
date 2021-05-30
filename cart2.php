<?php

include './api/config.php';
$dbObject = new Database;
//$dbObject->ifLoggedInUser();
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$service_id = $_COOKIE['id'];
$date = $_POST['date'];

/*$data = $dbObject->read_services("INSERT INTO `bookings`(`name`, `phone`, `email`, `service_id`, `date`) VALUES ('$name','$number','$email','$service_id','$date')");
for ($i=0; $i < count($data) ; $i++) {  
    
    $service = $data[$i]['service_name'];
    $specialist = $data[$i]['service_type'];
    $price = $data[$i]['price'];
    $date = date('d-m-Y');


}*/

//$user = $_COOKIE['id_user'];
//$user = '1';
$sql = "INSERT INTO `bookings`(`name`, `phone`, `email`, `service_id`, `date`) VALUES ('$name','$number','$email','$service_id','$date')";
$dbObject->insert($sql);
?>