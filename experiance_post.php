<?php
session_start();
require_once "database.php";

$cheking = true;

if(!$_POST['company_name']){
  $_SESSION['company_name_err'] = "Company name is required";
  $cheking = false;
}
if(!$_POST['duration']){
  $_SESSION['duration_err'] = "Duration is required";
  $cheking = false;
}
if(!$_POST['designation']){
  $_SESSION['designation_err'] = "Dsignation is empthy";
  $cheking = false;
}
if(!$_POST['description']){
  $_SESSION['description_err'] = "Description is missing";
  $cheking = false;
}

print_r($_POST);
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$description = htmlspecialchars($_POST['description'], ENT_QUOTES);

$ab = insert_que("experianc","company_name, duration, designation, description", "'$company_name','$duration','$designation','$description'");



 if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: experiance.php');
}else{
  echo "Something Else"; 
}
?>