<?php
if(isset($_POST["submit"])){
   $email = $_POST["email"];
   setcookie("id", $email, time() + (86400 * 800), "/");
   if(isset($_COOKIE["id"])){
    echo "<script>";
    echo "window.location.href ='index.php';";
    echo "</script>";
  
  }
}
?>