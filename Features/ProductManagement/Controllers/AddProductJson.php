<?php
require_once('../Models/productModel.php');

$productName=$_POST['productName'];
$category=$_POST['category'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$status=$_POST['status'];

$src=$_FILES['image']['tmp_name'];
$ext=explode('.', $_FILES['image']['name']);
$index=count($ext)-1;
$name=time().".".$ext[$index];
$des='../Assets/'.$name;
move_uploaded_file($src,$des);

$insert=addProduct($productName, $category, $price, $stock, $status, $name);
if($insert){
    $product=[
        'productName'=>$productName,
        'category'=>$category,
        'price'=>$price,
        'stock'=>$stock,
        'status'=>$status,
        'image'=>$name
    ];
    echo json_encode($product);
}else{
    echo json_encode(null);
}

?>