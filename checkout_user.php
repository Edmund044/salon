<?php
include './api/config.php';
$dbObject = new Database;
$id=$_COOKIE['id'];  
  $sql = "UPDATE `bookings` SET `status`='1' WHERE `service_id` = '$id' ";
  $result = $dbObject->update($sql);
  $sql2 = "UPDATE `orders` SET `status`='1' WHERE `user_id` = '$id' ";
  $result = $dbObject->update($sql2);
?>