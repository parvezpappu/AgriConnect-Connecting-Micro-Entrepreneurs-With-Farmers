<?php
require_once('../../ProductManagement/Models/productModel.php');
require_once('../../ProductBrowsing/Models/productbrowsingModel.php');

if(isset($_POST['action'])){
    $productID= $_POST['productID'];
    
    if($_POST['action']=='delete'){
        deleteProduct($productID);
        
    } 
    elseif($_POST['action']=='update'){
        header("Location: ../../ProductManagement/Views/UpdateProduct.php?id=". $productID);
    }
}

if(isset($_GET['search']) && $_GET['search'] !=''){
    $res = searchProducts($_GET['search']);
}
else{
    $res = getAllProduct();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="../Assets/Admin.css">
</head>
<body>
    <div id="productsView">
        <h1>All Products</h1>

        <div class="search">
            <form method="GET" action="Employee.php">
                <input type="hidden" name="page" value="products">
                <input type="text" name="search" placeholder="Search by ProductId, ProductName or Category..." 
                value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">

                <div class="searchbtn">
                    <button type="submit">Search</button>
                    <a href="Employee.php?page=products" class="clearbtn">Clear</a>
                </div>
            </form>
        </div>
        
        <table border="1" width="100%">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            
            <?php
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
            ?>
            
            <tr>
                <td><?php echo $row['productID']?></td>
                <td><?php echo $row['productName']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['stock']?></td>
                <td><?php echo $row['status']?></td>
                <td>
                    <img height="80" width="80" src="../../ProductManagement/Assets/<?php echo $row['image']?>">
                </td>
                <td>
                    <form method="post" style="display:inline;">
                        <input type="hidden" name="productID" value="<?= $row['productID']?>">
                        <button type="submit" name="action" value="delete" 
                                onclick="return confirm('Are you sure you want to delete this product?')">
                            Delete
                        </button>
                        <button type="submit" name="action" value="update">
                            Update
                        </button>
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
            
        </table>
        <a id="addProduct" href="../../ProductManagement/Views/AddProduct.php">Add Product</a>
    </div>
</body>
</html>





