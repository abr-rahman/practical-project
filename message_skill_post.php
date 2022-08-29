<?php
session_start();
require_once "database.php";

$cheak = true;

if(!$_POST['skill_name']){
  $_SESSION['skill_name_err'] = "Company name is required";
  $cheak = false;
}
if(!$_POST['message']){
  $_SESSION['message_err'] = "Message is required";
  $cheak = false;
}
if(!$_POST['icon']){
  $_SESSION['icon_err'] = "Icon is empthy";
  $cheak = false;
}


print_r($_POST);
$skill_name = $_POST['skill_name'];
$message = $_POST['message'];
$icon = $_POST['icon'];

$ab = insert_que("message_skill","skill_name, message, icon", "'$skill_name','$message','$icon'");


if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: message_skill.php');
}else{
  echo "Something Else";
}



?>