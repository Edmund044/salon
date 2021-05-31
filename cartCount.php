<?php 
include './api/config.php';
$dbObject = new Database;
$data = $dbObject->read_salon_orders("SELECT * FROM `orders` WHERE `status` = '0'");
echo  count($data);
?>