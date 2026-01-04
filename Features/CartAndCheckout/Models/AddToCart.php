<?php
require_once('../../ProductManagement/Models/ProductcartModel.php');

if(isset($_POST['productID'])){

    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $stock = $_POST['stock']

    addCart($productID, $productName, $productPrice,$stock);
   
    header("Location: ../../Dashboards/Views/ShopOwnerProducts.php");
  
}
?>
