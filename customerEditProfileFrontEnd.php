<?php
include 'customer.php';
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
</style>
<form method='POST' action=''>
<?php
 include 'dB.php';
 $sql = mysqli_query($conn, "SELECT * FROM User WHERE email='".$_SESSION['email']."'");
 if($row = mysqli_fetch_assoc($sql)){
?>
<input type='email' name='email' class='in' value='<?php echo $row['email'] ?>'>
<input type='text' name='password' class='in' value='<?php echo $row['password'] ?>'>

<?php
}
?>
<input type='submit' name='sub' value='Update Profile' class='but'>
</form>


<?php
include 'Customerphp.php';
if(isset($_POST['sub'])){
    $customer = new Customer();
    $customer->editProfile($_POST['email'], $_POST['password']);
}
?>