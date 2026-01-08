<?php

session_start();

if(!isset($_SESSION['valid']) || $_SESSION['valid'] !== true){
    echo "Please login first!";
    exit;
}

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    echo "Invalid URL";
    exit;
}
require_once('../../ProductManagement/Models/productModel.php');
require_once('../../ProductBrowsing/Models/productbrowsingModel.php');

if(isset($_POST['search'])){
    $search = $_POST['search'];

}
else{
    $search='';
}

if($search != ''){
    $res = searchProducts($search);
}
else{
    $res = getAllProduct();
}

if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_assoc($res)){
?>
        <tr>
            <td><?php echo $row['productID']; ?></td>
            <td><?php echo $row['productName']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <img height="80" width="80" src="../../ProductManagement/Assets/<?php echo $row['image']; ?>">
            </td>
            <td>
                <form method="post" action="Admin.php?page=products" style="display:inline;">
                    <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                    <button type="submit" name="action" value="delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    <button type="submit" name="action" value="update">Update</button>
                </form>
            </td>
        </tr>
<?php
    }
}
else{
    echo "<tr><td colspan='8'>Products not found!</td></tr>";
}
?>
