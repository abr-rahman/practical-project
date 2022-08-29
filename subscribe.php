<?php
    session_start();
    require_once "database.php";
    $email = $_POST['email'];
    $ab = insert_que("subscribe","email", "'$email'");
    header('location: index.php');
?>