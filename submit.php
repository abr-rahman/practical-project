<?php
 require_once "header.php"; 
   session_start();
   $ability = true;
 
   if(!$_POST['first_name']){
    echo "First Name is required.<br>";
    $_SESSION['fname_err'] = "Please Enter Your First Name ";
    $ability = false;
    }
   if(!$_POST['last_name']){
    echo "Last Name is required.<br>";
    $_SESSION['lname_err'] = "Please Enter Your Last Name ";
    $ability = false;
   }
   if(!$_POST['email']){
    echo "Email is required.<br>";
    $_SESSION['email_err'] = "Please Enter Your E-mail Address ";
    $ability = false;
   }
   if(!$_POST['password']){
    echo "Password Name is required.<br>";
    $_SESSION['password_err'] = "Please Enter Your Password : ";
    $ability = false;
   }
   if(!$_POST['confirm_password']){
    echo "Confirm Password Name is required.<br>";
    $_SESSION['confirm_password_err'] = "Please Enter Your Confirm Password : ";
    $ability = false;
   }

   if($_POST['password'] === $_POST['confirm_password']){
      $_SESSION['password_match_err'] = "Password dosen't not match !";
      $ability = false;
   }

   if($ability){
      echo "Done";
   }else{
      header('location: messege.php');
   }
    
?>