<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['news_photo'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/news/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

print_r($_POST);
//print_r($_FILES);
$news_headline = $_POST['news_headline'];
//$news_photo = $_FILES['news_photo'];
date_default_timezone_set('Asia/Dhaka');
$current_date = date('Y-m-d h:i:s');

$news_details = htmlspecialchars($_POST['news_details'], ENT_QUOTES);

$ab = insert_que("news","news_headline,news_details, news_photo, news_date_time ", "'$news_headline','$news_details', '$new_photo_name', '$current_date'");

$ab = true;

if(!$_POST['news_headline']){
  $_SESSION['news_headline_err'] = "Headline is required";
  $ab = false;
}
if(!$_POST['news_details']){
  $_SESSION['news_details_err'] = "Details is empthy";
  $ab = false;
}

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: news.php');
}else{
   echo "Something is rong";
}
?> 