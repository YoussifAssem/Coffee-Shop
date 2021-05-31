<?php
include 'User.php';
class Admin extends User{
    public function addEmployee($email, $password){
        parent::addUser($email, $password, 2);
    }
    public function removeEmployee($email){
        include 'dB.php';
        $sql = mysqli_query($conn, "DELETE FROM User WHERE email='$email' AND userType=2 ");
            echo '<script>alert("Done, Employee Removed Successfully")</script>';
            header('Refresh: 0.1');
        }
    public function editEmployee($email, $password){
            include 'dB.php';
            session_start();
            mysqli_query($conn, "UPDATE User SET email='$email', password='$password', userType=2 
            WHERE email='".$_SESSION['email']."'");
            $_SESSION['email'] = $email;
            echo '<script>alert("Done, Data Updated Successfully")</script>';
            return;
          }
    }



?>