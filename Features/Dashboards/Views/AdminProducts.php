<?php
require_once('../../ProductManagement/Models/productModel.php');
$res = getAllProduct();
?>

<div id="productsView" style="display:none;">
<link rel="stylesheet" href="../Assets/Admin.css">

  <h1>All Products</h1>
 
  <table border="1" width="100%">
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Status</th>
      <th>Image</th>
    </tr>
    
    <?php

    while($row=mysqli_fetch_assoc($res)){

    ?>

    <tr>
      <td><?php echo $row['productID'] ?></td>
      <td><?php echo $row['productName'] ?></td>
      <td><?php echo $row['category'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['stock'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td>
        <img height="80" width="80"  src="../../ProductManagement/Assets/<?php echo $row['image'] ?>">
      </td>
    </tr>

    <?php

    }
    ?>

  </table>

  <div id="productButton">
    <button id="addProduct" onclick="location.href='../../ProductManagement/Views/AddProduct.php'">Add Product</button>
    <button id="updateProduct" onclick="location.href='../../ProductManagement/Views/UpdateProduct.php'">Update Product</button>
    <button id="deleteProduct" onclick="location.href='../../ProductManagement/Views/DeleteProduct.php'">Delete Product</button>

  </div>

</div>
