<?php
session_start();
    require_once "database.php";
    $id=$_GET['id'];
    print_r($_POST);
    $company_name = $_POST['company_name'];
    $duration = $_POST['duration'];
    $designation = $_POST['designation'];
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);

    foreach($_POST as $setup_name => $setup_value){
        $update_query = "UPDATE experiance SET company_name = '$company_name' WHERE setup_name = '$setup_name'";
        //'UPDATE experianc SET company_name, duration, designation, description = "'$company_name','$duration','$designation','$description' " WHERE 1';
        mysqli_query(connect_to_db(), $update_query);
     }
    header('location: experiance.php')
?>