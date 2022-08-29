<?php
    require_once "database.php";
    echo delete_query("partner","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: partner.php')
?>