<?php include "../includes/db.php" ?> 
<?php include "./functions.php"; ?>
<?php ob_start(); ?>



<?php session_start(); ?>

<?php

if (isset($_SESSION['user_role'])) {

if ($_SESSION['user_role'] !== 'admin') {

header("Location: ../index.php");

}


}






?>

<!-- <?php
//if(!isset($_SESSION['user_role'])) {
//header("Location: ../index.php ");

//}

?> -->






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    

    <!-- Add custom CSS here -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>