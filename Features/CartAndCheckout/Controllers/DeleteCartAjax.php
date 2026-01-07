<?php
session_start();
require_once('../Models/ProductcartModel.php');

$productID = $_POST['productID'];

removeCart($productID);

if (isset($_SESSION['cartQuantity'][$productID])) {
    unset($_SESSION['cartQuantity'][$productID]);
}

echo "deleted";
