    <?php
    require_once("../../AuthenticationSystem/Models/db.php");
    require_once("../Models/RequstModels.php");

    [$requests,$count]=getAllRequests();

    if(isset($_POST['approve'])){
        $email=$_POST['email'];
        if($email == ""){
            echo "Invalid Request";
            exit;
        }

        $selectedRequest=null;
         //fully array ta ache. so which one?
        foreach($requests as $req){
            if($req['Email']===$email){
                $selectedRequest=$req;
                break;
            }
        }

        if($selectedRequest==null){
            echo "Request not found";
            exit;
        }

        $name= $selectedRequest['Name'];
        $address=$selectedRequest['Address'];
        $password=$selectedRequest['Password'];
        $role=$selectedRequest['Role'];

        $con=getConnection();
        if($role==="Farmer"){

            $sql="INSERT INTO Farmer VALUES('$name','$email','$address','$password','Farmer')";
            mysqli_query($con,$sql);

        }
        else if($role==="ShopOwner"){

            $sql="INSERT INTO ShopOwner VALUES('$name','$email','$address','$password','ShopOwner')";
            mysqli_query($con, $sql);
        }
        else{
            echo "Invalid role";
            exit;
        }

       
        $deleteSql="DELETE FROM request WHERE Email='$email'";
        mysqli_query($con,$deleteSql);
        header("Location: ../Views/Employee.php");
        exit;
    }
    else{
        header("Location: ../Views/Employee.php");
        exit;
}
