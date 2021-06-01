<?php 
include 'dB.php';
include 'admin.php';
?>
<style>

.in{
    padding: 10px;
    text-align: center;
    margin-top: 50px;
    width: 1500px;
    margin-left: 100px;
    
}
.but{
    padding: 10px;
    text-align: center;
    margin-top: 50px;
    width: 1500px;
    margin-left: 100px;
}
hr{
  border: 10px solid green;
  border-radius: 5px;
}

</style>
<form method='POST' action=''>
<?php
$sql = mysqli_query($conn, "SELECT * FROM User WHERE userType=2");
while($row = mysqli_fetch_array($sql)){
    ?>
    <input type='email' name='email' value='<?php echo $row['email'] ?>' class='in' readonly>
    <input type='text' name='password' value='<?php echo $row['password'] ?>' class='in' readonly>
    select Employee: <input type='checkbox' name='delete[]' value='<?= $row['email'] ?>'>
   
    <br><br><br><hr>
   <?php
}
?>
<input type='submit' name='sub' value='Remove Employees' class='but'>
</form>


<?php
include 'Adminphp.php';
if(isset($_POST['sub'])){
    $admin = new Admin();
    foreach($_POST['delete'] as $dele)
       $admin->removeEmployee($dele);
}
?>