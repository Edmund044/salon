<?php
include './api/config.php';
$dbObject = new Database;
if (isset($_POST['submit'])) {
  # Get the values
    echo  $name=$dbObject->security($_POST['name']);
    echo  $pass=$dbObject->security($_POST['password']);
     
   // $user=security($_POST['email']);
    //$pass=security($_POST['password']);
$sql = "SELECT * FROM `admin` WHERE `login_name` = '$name' AND `password` = '$pass'";
$dbObject->login_admin($sql);

  
}

?>