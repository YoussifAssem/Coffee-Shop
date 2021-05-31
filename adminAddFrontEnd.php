<?php
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
</style>
<form method='POST' action=''>
<input type='email' name='email' placeholder="Enter Email" class='in'>
<input type='password' name='password' placeholder="Enter Password" class='in'>
<input type='submit' name='sub' value='Add New Employee' class='but'>
</form>


<?php
include 'Admin.php';
if(isset($_POST['sub'])){
    $admin = new Admin();
    $admin->addEmployee($_POST['email'], $_POST['password'], 2);
}
?>