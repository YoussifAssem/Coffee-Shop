<?php
include 'User.php';
class Admin extends User{
    public function addEmployee($email, $password){
       parent::addUser($email, $password, 2);
    }
    public function removeEmployee($email){
      include 'dB.php';
      $sql = mysqli_query($conn, "DELETE FROM User WHERE email='$email'");
      echo '<script>alert("Done, Employees Deleted Successfully")</script>';
      header("Refresh:0.1");
      return;
    }

}


?>