<?php
require_once('../../ProductManagement/Models/ProductcartModel.php');

if(isset($_POST['productID']))
 {
 
     $productID    = $_POST['productID'];
     $productName  = $_POST['productName'];
     $productPrice = $_POST['productPrice'];
 
     addToProductCart($productID, $productName, $productPrice);
    
     header("Location: ../../Dashboards/Views/ShopOwnerProducts.php");
   
 }
?>
