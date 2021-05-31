<?php

	class Product
	{
		public function InsertNewProduct($post)
		{
			include 'dB.php';
			$ProductName = $conn->real_escape_string($_POST['ProductName']);
			$ProductType = $conn->real_escape_string($_POST['ProductType']);
			$ProductFlavors = $conn->real_escape_string($_POST['ProductFlavors']);
			$Description= $conn->real_escape_string($_POST['Description']);
			$Price = $conn->real_escape_string($_POST['Price']);
			$image=$_FILES['Image'];
            $file_name=$_FILES['Image']['name'];
            $file_size=$_FILES['Image']['size'];
            $file_tmp=$_FILES['Image']['tmp_name'];
            $file_type=$_FILES['Image']['type'];

	
			

			$sql="INSERT INTO Products(ProductID,ProductName,ProductType,ProductFlavors,Description,Price,Image) VALUES 
			(Null,'$ProductName','$ProductType', '$ProductFlavors','$Description','$Price','$file_name')";
			$result = mysqli_query($conn,$sql);
			move_uploaded_file($file_tmp,"Products/".$file_name);
			
	if ($result) {
		header("Location:employee.php?msg1=insert");
	} 

		
		}
	
		public function displayData()
		{
			include 'dB.php';
			$query = "SELECT * FROM products";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0) {
				$data = array();
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}
		}
		public function displyaRecordById($id)
		{
			$query = "SELECT * FROM Products WHERE ProductID = '$id'";
			$result = $conn->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Product not found";
			}
		}
		public function updateRecord($postData)
		{
			$ProductName  = $conn->real_escape_string($_POST['ProductName']);
			$ProductType = $conn->real_escape_string($_POST['ProductType']);
			$ProductFlavors = $conn->real_escape_string($_POST['ProductFlavors']);
			$Description = $conn->real_escape_string($_POST['Description']);
			$Price = $conn->real_escape_string($_POST['Price']);
			
			$image=$_FILES['Image'];
            $file_name=$_FILES['Image']['name'];
            $file_size=$_FILES['Image']['size'];
            $file_tmp=$_FILES['Image']['tmp_name'];
            $file_type=$_FILES['Image']['type'];
			
			$ProductID= $conn->real_escape_string($_POST['ProductID']);
			if (!empty($ProductID) && !empty($postData)) {
				$sql = "UPDATE Products SET ProductName='$ProductName',ProductType='$ProductType',ProductFlavors='$ProductFlavors',Description='$Description', Price='$Price', Image='$file_name' WHERE ProductID = $ProductID";
				$result = mysqli_query($this->con,$sql);
				move_uploaded_file($file_tmp,"Products/".$file_name);
			if ($result) {
  header("Location:employee.php?msg2=update");
} else {
  echo "Error: " . $sql . "<br>" . $this->con->error;
}
				
			}
			
		}
		public function deleteRecord($id)
		{
			$query = "DELETE FROM Products WHERE ProductID = '$id'";
			$sql = mysqli_query($conn,$query);
			if ($sql) {
				header("Location:employee.php?msg3=delete");
			}
		}

	}
?>