<?php
require_once('../../ProductManagement/Models/productModel.php');
require_once('../../ProductBrowsing/Models/productbrowsingModel.php');

$res=getAllProduct();

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
            <input type="text" id="search" placeholder="Search by ProductId, ProductName or Category...">
            <div class="searchbtn">
                <button type="button" onclick="ajaxSearch()">Search</button>
                <button type="button" class="clearbtn" onclick="clearSearch()">Clear</button>
            </div>
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
            
            <tbody id="productRows">
                <?php
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){ ?>
                    <tr>
                        <td><?php echo $row['productID']?></td>
                        <td><?php echo $row['productName']?></td>
                        <td><?php echo $row['category']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo $row['stock']?></td>
                        <td><?php echo $row['status']?></td>
                        <td><img height="80" width="80" src="../../ProductManagement/Assets/<?php echo $row['image']?>"></td>
                        <td>
                            <form method="post" action="Admin.php?page=products" style="display:inline;">
                                <input type="hidden" name="productID" value="<?php echo $row['productID']?>">
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
                } ?>
            </tbody>
        </table>
        <a id="addProduct" href="../../ProductManagement/Views/AddProduct.php">Add Product</a>
    </div>

    <script>
    function ajaxSearch(){
    var search = document.getElementById('search').value;

    if(search == ''){
        alert('Please enter product Id, Name or Category to search!');
        return;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST','../../ProductBrowsing/Controllers/ProductSearchAjax.php', true);
    xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhttp.send('search=' + search);
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('productRows').innerHTML=this.responseText;
        }
    }
}

function clearSearch(){
    document.getElementById('search').value = '';

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST','../../ProductBrowsing/Controllers/ProductSearchAjax.php', true);
    xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhttp.send('search=');

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('productRows').innerHTML = this.responseText;
        }
    }
}
</script>
</body>
</html>