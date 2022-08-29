<?php
    require_once "database.php";
    echo delete_query("sel_manager","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: sel_manager.php')
?>