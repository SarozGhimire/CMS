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
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
</head>

<body>