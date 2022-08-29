<?php
    session_start();
    require_once "database.php";
    print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $ab = insert_que("head_form","name, email, message", "'$name','$email','$message'");
   // $_SESSION['add_status'] = "Form Submited Successfully";
    header('location: index.php');
?>