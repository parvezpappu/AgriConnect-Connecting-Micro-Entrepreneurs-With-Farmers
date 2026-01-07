<?php
require_once('../../ProductManagement/Models/productModel.php');
require_once('../../ProductBrowsing/Models/productbrowsingModel.php');

/*if(isset($_GET['search']) && $_GET['search']!=''){
    $res=searchProducts($_GET['search']);
}
else{
    $res=getAllProduct();
}
*/

$res = getAllProduct();
?>


<div id="productsView">
    <h1>All Products</h1>

    <div class="search">
        <input type="text" id="searchText" placeholder="Search by productID, productName or Category">
        
        <div class="searchbtn">
            <input type="button" value="Search" onclick="ajaxProductSearch()">
            <input type="button" value="Clear" onclick="clearButton()">
        </div>
    </div>

    <div id="searchResult">
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
    </div>
    <a id="addProduct" href="../../ProductManagement/Views/AddProduct.php">Add Product</a>
    
<script src="../../ProductBrowsing/Assets/ProductBrowsing.js"></script>
</div>
  