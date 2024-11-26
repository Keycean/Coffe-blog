

<?php

include  'config.php'; 
if(isset($_POST['signUp'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];


   $checkEmail="SELECT * From users where email='$email'";
  
   $result=$db->query($checkEmail);
;
   if($result->num_rows>0){
    header("Location: regerror.php");
   }    
   else{
      $insertQuery="INSERT INTO users(username,email,password)
                     VALUES ('$username','$email','$password')";
          if($db->query($insertQuery)==TRUE){
              header("location: userlogin.php");
          }
          else{
              echo "Error:".$db->error;
          }
   }


}

// if(isset($_POST['signIn'])){
//   $email=$_POST['email'];
//   $password=md5($_POST['password']);

//   $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
//   $result=$db->query($sql);

//   if($result->num_rows > 0){
//       $row = $result->fetch_assoc();
//       $_SESSION['username'] = $row['username'];
//       $_SESSION['email'] = $row['email'];
//       header("Location: home.php");
//       exit();
//   } else {
//       header( "Location: error.php");

//   }
// }
