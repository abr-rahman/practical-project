<?php
session_start();
require_once "database.php";
print_r($_POST);
$skill_name = $_POST['skill_name'];
$percantage = $_POST['percantage'];

$ab = insert_que("sill","skill_name, percantage", "'$skill_name','$percantage'");

$ab = true;

if(!$_POST['skill_name']){
  $_SESSION['skill_name_err'] = "Skill name is required";
  $ab = false;
}

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: skil.php');
}else{
  echo "Something Else";
}

?>