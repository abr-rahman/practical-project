<?php
    require_once "database.php";
    echo delete_query("message_skill","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: message_skill.php')
?>