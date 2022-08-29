<?php
session_start();
require_once "database.php";

$chek_power = true;

if(!$_POST['employes_name']){
  $_SESSION['employes_name_err'] = "Company name is required";
  $chek_power = false;
}
if(!$_POST['message']){
  $_SESSION['message_err'] = "Message is required";
  $chek_power = false;
}
if(!$_POST['position']){
  $_SESSION['position_err'] = "Position is empthy";
  $chek_power = false;
}

print_r($_POST);
$employes_name = $_POST['employes_name'];
$message = $_POST['message'];
$position = $_POST['position'];

 $ab = insert_que("sel_manager","employes_name, message, position", "'$employes_name','$message','$position'");


 if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: sel_manager.php');
}else{
  echo "Something Else"; 
}
?>