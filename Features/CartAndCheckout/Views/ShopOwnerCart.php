
  <?php

  //session_start();
  require("../../AuthenticationSystem/Controllers/authCheck.php");
  require_once('../Models/ProductcartModel.php');

  
  $res = getProductcart();
  $count = mysqli_num_rows($res);

  if(!isset($_SESSION['cartQuantity']))
  {
    $_SESSION['cartQuantity']=[];
  }
  if (!isset($_SESSION['Error']) || !is_array($_SESSION['Error']))
  {
      $_SESSION['Error']=[];
  }


  if(isset($_POST['action'], $_POST['productID'])) 
    {
        $productID = $_POST['productID'];
        if(!isset($_SESSION['cartQuantity'][$productID]))
          {
              $_SESSION['cartQuantity'][$productID] = 1;
          }

        if($_POST['action'] == 'plus')
        {
            $stockResult = getStock($productID);
            $stockRow = mysqli_fetch_assoc($stockResult);
            $stock = $stockRow['stock'];
        
            if ($_SESSION['cartQuantity'][$productID] < $stock) 
              {
                  $_SESSION['cartQuantity'][$productID]++;
                  unset($_SESSION['Error'][$productID]); 
              } 
            else
            {
                $_SESSION['Error'][$productID] = "Maximum stock<br>limit reached";
            }
        }


      if ($_POST['action'] == 'minus' && $_SESSION['cartQuantity'][$productID] > 1) 
        {
            $_SESSION['cartQuantity'][$productID]--;
            unset($_SESSION['Error'][$productID]); 
        }
  
      header("Location: ShopOwnerCart.php");
  }



  if(isset($_POST['delete'], $_POST['productID']))
  {
      $productID = $_POST['productID'];
      removeCart($productID);
      if(isset($_SESSION['cartQuantity'][$productID])) 
      {
          unset($_SESSION['cartQuantity'][$productID]);
      }
      header("Location: ShopOwnerCart.php");
  }
  $shipping = 5;

  ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../Assets/ShopOwnerCart.css">
  </head>
  <body>
      <div id="dashboardComponent">
          
          <div id="middleDashBoard">
              <div id="CartMessage">
                <h3>Your Shopping Cart</h3>
              </div>
      
            
              <table border="1" id="cartTable">
                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Unit Price</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody class="cartItems">
                  <?php
                
                  $total=0;
                  if($count > 0)
                  {
                    while($row = mysqli_fetch_assoc($res))
                    {
                  
                      $productID = $row['productID'];
                      $price = $row['price'];
                  
                      if(!isset($_SESSION['cartQuantity'][$productID]))
                      {
                          $_SESSION['cartQuantity'][$productID] = 1;
                      }
                  
                      $quantity = $_SESSION['cartQuantity'][$productID];
                      $subtotal = $price * $quantity;
                      $total+=$subtotal;
                  ?>
                  
                  <tr>
                    <td><?php echo $productID ?></td>
                    <td><?php echo $row['productName'] ?></td>
                    <td><?php echo $price ?></td>
                
                    <td>
                      <form method="post" style="display: inline;">
                          <input type="hidden" name="productID" value="<?php echo $productID ?>">
                          <button type="submit" name="action" value="minus">-</button>
                      </form>
              
                      <?php echo $quantity ?>
              
                      <form method="post" style="display: inline;">
                          <input type="hidden" name="productID" value="<?php echo $productID ?>">
                          <button type="submit" name="action" value="plus">+</button>
                      </form>

                      <?php if(isset($_SESSION['Error'][$productID])) 
                      { ?>
                            <div id="stockError">
                                <?php echo $_SESSION['Error'][$productID]; ?>
                            </div>
                      <?php } ?>
                    </td>
                
                    <td>$<?php echo $subtotal ?></td>             
                    <td>
                      <form method="post" style="display:inline;">
                        <input type="hidden" name="productID" value="<?php echo $productID; ?>">
                        <button type="submit" name="delete" id="deleteProduct" >Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php
                  }
                }
                ?>
                  
              </table>

              <?php
                 $totalCost=0;
                 $totalCost = $total+$shipping;  
              ?>
              
              <div id="summaryBox">
                  <p>Total: $<?php echo $total; ?></p>
                  <p>Shipping: $<?php echo $shipping; ?></p>
                  <hr>
                  <p><strong>Total Cost: </strong> $<?php echo $totalCost; ?></p>
                  
                  <form method="post" action="../../PaymentSystem/Views/Payment.php">
                     <input type="hidden" name="totalCost" value="<?php echo $totalCost; ?>">
                    <button type="submit" name="confirmOrder" id="confirmButton">Confirm Order</button>
                  </form>
              </div>

            <div>
            <a id="Shopping" href="../../Dashboards/Views/ShopOwner.php"> ← Continue Shopping</a>
            </div>

          </div>

      </div>
  </body>
  </html>