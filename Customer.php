<?php
include 'User.php';
class Customer extends User{
  public function signUp($email, $password, $userType){
      parent::addUser($email, $password, $userType);
  }
public function editProfile($email, $password){
    include 'dB.php';
    session_start();
    mysqli_query($conn, "UPDATE User SET email='$email', password='$password', userType=3 
    WHERE email='".$_SESSION['email']."'");
    $_SESSION['email'] = $email;
    echo '<script>alert("Done, Data Updated Successfully")</script>';
    return;
  }
}

?>