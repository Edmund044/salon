<?php 
include './api/config.php';
$dbObject = new Database;
$data = $dbObject->read_salon_orders("SELECT * FROM `orders`");
echo  count($data);
?>