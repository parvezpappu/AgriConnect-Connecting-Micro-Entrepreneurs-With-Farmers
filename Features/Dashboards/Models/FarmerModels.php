<?php
require_once("../../AuthenticationSystem/Models/db.php");

function getAllFarmers(){

    $con=getConnection();
    $sql="SELECT * FROM Farmer";
    $res=mysqli_query($con, $sql);
    $count=mysqli_num_rows($res);

    $farmers=[];
    while($row=mysqli_fetch_assoc($res)){
        $farmers[]=$row;
    }

    return [$farmers,$count];
}

    function deleteFarmer($email){
        $con = getConnection();
        $sql = "DELETE FROM Farmer WHERE Email = '$email'";
        return mysqli_query($con, $sql);
    }// delete marbo ar ki


?>
