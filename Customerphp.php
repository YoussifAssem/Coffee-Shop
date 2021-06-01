<?php
include 'User.php';
class Customer extends User{
public function editProfile($email, $password){
  include 'dB.php';
    $sql = mysqli_query($conn, "UPDATE User SET email='$email', password='$password' WHERE email='".$_SESSION['email']."'");
      echo '<script>alert("Done, Profile Updated Successfully")</script>';
      $_SESSION['email'] = $email;
      header('Refresh: 0.1');
      return;
  }
}


?>