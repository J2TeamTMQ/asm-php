<?php

// require MySQL Connection
require ('../models/database/DBController.php');

// require Product Class
require ('../models/database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}