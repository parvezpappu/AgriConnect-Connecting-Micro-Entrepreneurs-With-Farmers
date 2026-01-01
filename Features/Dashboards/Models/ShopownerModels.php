    <?php
    require_once("../../AuthenticationSystem/Models/db.php");

    function getAllShopOwners(){

        $con=getConnection();
        $sql="SELECT * FROM ShopOwner";
        $res=mysqli_query($con, $sql);
        $count=mysqli_num_rows($res);
        $shopOwners=[];

        while($row=mysqli_fetch_assoc($res)){
            $shopOwners[]=$row;
        }

        return[$shopOwners,$count];
    }

    function deleteShopOwner($email){
        $con=getConnection();
        $sql="DELETE FROM ShopOwner WHERE Email ='$email'";
        return mysqli_query($con, $sql);
    }
    ?>
