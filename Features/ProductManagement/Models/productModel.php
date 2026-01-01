<?php
require_once('../../AuthenticationSystem/Models/db.php');

/*function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}*/

function getAllProduct(){
    $con = getConnection();
    $sql = "select * from allproducts";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if (!$result){
        die("Query failed: " . mysqli_error($con));
    }

    return $result;

}

function getProductById($id){

}

function addProduct($productName, $category, $price, $stock, $status, $image){
    $con= getConnection();
    $sql= "insert into allproducts(productName, category, price, stock, status, image) 
            values ('$productName', '$category', '$price', '$stock', '$status', '$image')";
    
    if(mysqli_query($con, $sql)){
        return true;

    }else{
        return false;
    }  
}

function deleteProduct($id){

}

function updateProduct($user){
    
}

?>