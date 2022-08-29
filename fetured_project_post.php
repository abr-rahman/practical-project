<?php
session_start();
require_once "database.php";

$upload_photo = $_FILES['project_picture'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'img/portfolio/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

print_r($_POST);
$project_headline = $_POST['project_headline'];
$picture_name = $_POST['picture_name'];
$picture_details = $_POST['picture_details'];
$clients = $_POST['clients'];
$completion = $_POST['completion'];
$project_type = $_POST['project_type'];
$authors = $_POST['authors'];
$budget = $_POST['budget'];

$ab = insert_que("fetured_project","project_headline, project_picture, picture_name, picture_details, clients, completion, project_type, authors, budget", "'$project_headline','$new_photo_name', '$picture_name', '$picture_details', '$clients' ,'$completion ', '$project_type', '$authors', '$budget'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: fetured_project.php');
}else{
  echo "Something Else";
}

?> 