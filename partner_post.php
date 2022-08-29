<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['partner_photo'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/partners/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

$ab = insert_que("partner","partner_photo", "'$new_photo_name'");

$ab = true;

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: partner.php');
}else{
 echo "Something Else";
}
?>