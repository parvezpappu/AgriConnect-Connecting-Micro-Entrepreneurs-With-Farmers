<?php
require_once("../../AuthenticationSystem/Models/db.php");

function getAllShopOwners(){

    $con = getConnection();
    $sql = "SELECT * FROM ShopOwner";
    $res = mysqli_query($con, $sql);

    $shopOwners = [];

    while($row = mysqli_fetch_assoc($res)){
        $shopOwners[] = $row;
    }

    return $shopOwners;
}
?>
