<?php
include 'User.php';
class Admin extends User{
    public function addEmployee($email, $password){
        parent::addUser($email, $password, 2);
    }
    public function removeEmployee($email){
        include 'dB.php';
        $sql = mysqli_query($conn, 'DELETE FROM User WHERE email='$email' AND userType=2');
        if(mysqli_num_rows($sql) > 0){
            echo '<script>alert("Done, Employee Removed Successfully")</script>';
            return;
        }
        else{
            echo '<script>alert("Error, Data Is Not Correct")</script>';
            return;
        }
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