<?php
  include 'Product.php';

  $ProductObj = new Product();
  if(isset($_POST['submit'])) {
    $ProductObj->InsertNewProduct($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<div class="container">
  <form action="addProduct.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
       <label>Product Name:</label>
        <input type="text" class="form-control" name="ProductName"  required="">
    </div>
    
	 <div class="form-group">
      <label for="name">Product Type:</label>
      <select class="form-control" name="ProductType"  required="">
     <option value="House blend">House blend</option>
  <option value="Dark roast">Dark roast</option>
  <option value="Decaf">Decaf</option>
  <option value="Espresso">Espresso</option>
 
</select>
    </div>
	
	<div class="form-group">
      <label for="name">Product Flavors</label>
      <select class="form-control" name="ProductFlavors"  required="">
     <option value="Steamed milk">Steamed milk</option>
  <option value="Foamed milk">Foamed milk</option>
  <option value="Soy">Soy</option>
  <option value="Chocolate">Chocolate</option>
 
</select>
    </div>
	

    <div class="form-group">
    <label >Description:</label>
      <input type="text" class="form-control" name="Description"  required="">
    </div>
	
	<div class="form-group">
      <label >Price:</label>
      <input type="number" class="form-control" name="Price"  required="">
    </div>
	
	<div class="form-group">
      <label >Image:</label>
     
	  <input type="file"  name="Image" required="">
    </div>
  
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
