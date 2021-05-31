<?php
  
  include 'Product.php';

  $productObj = new Product();

  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $productObj->deleteRecord($deleteId);
  }
     
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>Products</h4>
</div><br><br> 

<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              New Product added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Product updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Product deleted successfully
            </div>";
    }
    if (isset($_GET['msg4']) == "missing") {
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Complete your data 
            </div>";
    }
  ?>
  <h2>Available Products:
    <a href="addProduct.php" class="btn btn-primary" style="float:right;">Add new product</a>
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Name</th>
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
            <a href="editProduct.php?editId=<?php echo $produt1['ProductID'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="Employee.php?deleteId=<?php echo $produt1['ProductID'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
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