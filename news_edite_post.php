<?php
  require_once "database.php";
 //if($_FILES['news_new_photo']['name']){
  $link = __DIR__ . "/img/news/". $_POST['old_photo_name'];
 //   $link = $_SERVER['DOCUMENT_ROOT'] . "/second_project/img/news/". $_POST['old_photo_name'];
    unlink($link);

  $upload_photo = $_FILES['news_new_photo'];
  $after_expload = explode(".", $upload_photo['name']);
  $new_photo_name = rand() . time().".". end($after_expload);
  $up_location = $upload_photo['tmp_name'];
  $new_lacation = 'img/news/'. $new_photo_name;
  move_uploaded_file($up_location, $new_lacation);

  //tell database photo name
  $old_photo_name = $_POST['old_photo_name'];
  $update_query = "UPDATE news SET news_photo = '$new_photo_name' WHERE news_photo = '$old_photo_name'";
   mysqli_query(connect_to_db(), $update_query);
 
  header('location: news.php');
// ?> 