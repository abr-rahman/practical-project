<?php
    session_start();
    require_once "database.php";
    delete_with_photo("news","id", $_GET['id'], "news_photo");
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: news.php')
?>
