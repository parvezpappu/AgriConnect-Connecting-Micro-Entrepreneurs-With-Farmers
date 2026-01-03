<?php
require_once('../Models/productModel.php');

if(isset($_POST['submit'])){

    $productName=$_POST['productName'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $status=$_POST['status'];
    
    $src=  $_FILES['image']['tmp_name'];
    $ext = explode('.', $_FILES['image']['name']);
    $index = count($ext) -1;
    $name = time().".".$ext[$index];
    $des = '../Assets/'.$name;
    move_uploaded_file($src, $des);

    $product=addProduct($productName, $category, $price, $stock, $status, $name);
    if($product){
        echo "Successfully added!";
    }
    else{
        echo "Error!";
    }
}
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
        <form method="POST" action="" enctype="multipart/form-data">
            
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
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>

    <a href="../../Dashboards/Views/Admin.php" id="back">Back</a>
</body>
</html>
