<?php
require_once('../Models/productModel.php');
$result = getAllProduct();
?>

<div id="productsView" style="display:none;">
<link rel="stylesheet" href="../Assets/AdminProducts.css">
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

    while($row=mysqli_fetch_assoc($result)){

    ?>

    <tr>
      <td><?php echo $row['productID'] ?></td>
      <td><?php echo $row['productName'] ?></td>
      <td><?php echo $row['category'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['stock'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td>
        <img height="80" width="80"  src="../Assets/<?php echo $row['image'] ?>">
      </td>
    </tr>

    <?php

    }
    ?>

  </table>
</div>
