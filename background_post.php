<?php
session_start();
require_once "database.php";

  $upload_photo = $_FILES['news_new_photo'];
  $after_expload = explode(".", $upload_photo['name']);
  $new_photo_name = rand() . time().".". end($after_expload);
  $up_location = $upload_photo['tmp_name'];
  $new_lacation = 'img/bg/'. $new_photo_name;
  move_uploaded_file($up_location, $new_lacation);

 $ab = insert_que("background_photo","news_new_photo", "'$new_photo_name'");
 $_SESSION['add_status'] = "Background Picture Added Successfully";
  header('location: background_pic.php');

?> 

