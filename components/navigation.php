<?php
//define('PROJECT_ROOT_PATH', __DIR__);
//include_once (PROJECT_ROOT_PATH . '../api/config.php');
include './api/config.php';
$dbObject = new Database;

?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- CUSTOM STYLES-->
<link rel="stylesheet" href="./assets/css/main.css" >
<script src="./assets/js/book_now.js"></script>
<script src="./assets/js/addCart.js"></script>
<script src="./assets/js/addProduct.js"></script>
<script src="./assets/js/refreshCart.js"></script>
<script src="./assets/js/deleteCart.js"></script>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cart.php">CART  <span class="badge bg-primary rounded-pill text-white" id="cart"> </span></a>
  </li>
 
</ul>