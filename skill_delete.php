<?php
    require_once "database.php";
    delete_query("sill","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: skil.php')
    
?>