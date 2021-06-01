<?php

include 'Product.php';
  $productObj = new Product();
  ?>
  
  <!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>Beverages</h4>
</div><br><br> 

<div class="container">
 
  <h2>Available beverages:
   
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Falvors</th>
        <th>Description</th>
        <th>Price</th>
		<th>Image</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $product = $productObj->displayData(); 
		  
		  
		  if ($product==Null)
			  print("No products Available");
		  else
		  {
          foreach ($product as $produt1) {
        ?>
        <tr>
          <td><?php echo $produt1['ProductName'] ?></td>
          <td><?php echo $produt1['ProductType'] ?></td>
          <td><?php echo $produt1['ProductFlavors'] ?></td>
          <td><?php echo $produt1['Description'] ?></td>
          <td><?php echo $produt1['Price'] ?>EGP</td>
		 
		 <td><?php echo "<img src='Products/".$produt1['Image']."' width='400' height='200' >";?></td>
          <td>
          
            <a href="ViewProductsCustomers.php?productId=<?php echo $produt1['ProductID'] ?>" style="color:black" onclick="confirm('Are you sure want to buy this iteam?')">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
		
		 <?php }?>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>