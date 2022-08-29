<?php
    require_once "database.php";
    delete_query("fetured_project","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: fetured_project.php');
?>