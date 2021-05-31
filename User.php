<?php
class User{
  private $email;
  private $password;
  private $userType;

  function addUser($email, $password, $userType){
     $this->email = $email;
     $this->password = $password;
     $this->userType = $userType;
     if(!$this->validateData()){
      $this->insertData();
   }
}
  private function validateData(){
   include 'dB.php';
     $flag = true;
     if($this->email == '' || $this->password == '' || $this->userType == ''){
        return $flag;
     }
     $sql = mysqli_query($conn, "SELECT email FROM User WHERE email='$this->email'");
     if(mysqli_num_rows($sql) > 0){
        echo '<script>alert("Error, Name Is Already Taken")</script>';
        return $flag; 
      }
     if(mysqli_num_rows($sql) == 0){
     $flag = false;
     return $flag;
   }
  }
  private function insertData(){
   include 'dB.php';
     mysqli_query($conn, "INSERT INTO User
      (email, password, userType) 
       VALUES
       ('$this->email', '$this->password', '$this->userType')");
       echo '<script>alert("Done, Your Account Saved Successfully")</script>';
       return;
  }
  public function getEmail(){
     return $this->email;
  }
  public function getPassword(){
     return $this->password;
  }
  public function logIn($email, $password){
   include 'dB.php';
   $sql = mysqli_query($conn,"SELECT * FROM User WHERE email='$email' AND password='$password'");
   if(mysqli_num_rows($sql) > 0){
      if($row = mysqli_fetch_assoc($sql)){
        if($row['userType'] == 1){
         session_start();
         $_SESSION['email'] = $email;  
         //Call Page
       }
       if($row['userType'] == 2){
         session_start();
         $_SESSION['email'] = $email;  
         //Call Page
       }
       if($row['userType'] == 3){
         session_start();
         $_SESSION['email'] = $email;  
         //Call Page
       }
       
       else{
         echo '<script>alert("Error, Customer Is Not Exist")</script>';
         return;
             
       }
   }
   else{
       echo '<script>alert("Error, Data Is Not True")</script>';
       return;
   }
 }

  }
}



?>