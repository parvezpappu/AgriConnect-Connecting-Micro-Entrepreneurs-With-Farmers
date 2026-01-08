<?php
require_once('../Models/productModel.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../Assets/AddProduct.css">
    
</head>
<body>
    <div id="title">
        <h1>Add Product</h1>
    </div>

    <div class="form">
        <form id="addProductForm" method="POST" enctype="multipart/form-data">
            
            <div class="productTable">
                <label>Product Name: </label>
                <input type="text" name="productName" id="productName">
            </div>

            <div class="productTable">
                <label>Category: </label>
                <input type="text" name="category" id="category">
            </div>

            <div class="productTable">
                <label>Price: </label>
                <input type="number" name="price" id="price">
            </div>

            <div class="productTable">
                <label>Stock: </label>
                <input type="text" name="stock" id="stock">
            </div>

            <div class="productTable">
                <label>Status: </label>
                <input type="text" name="status" id="status">
            </div>

            <div class="productTable">
                <label>Product Image: </label>
                <input type="file" name="image" id="image">
            </div>

            <div class="productTable">
                <button type="button" onclick="submitProduct()">Submit</button>
            </div>
        </form>
    </div>

    <a href="../../Dashboards/Views/Admin.php" id="back">Back</a>
    <script src="../Assets/AddProduct.js"></script>
</body>
</html>

