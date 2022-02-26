<?php

// print_r($_SESSION);
$title =$_SESSION["page_title"];
$current_page=$_SESSION["current_page"]

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo $title; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


        <header class="mb-auto">
            <div>
            
                <h3 class="float-md-start mb-0">PHP</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link  <?php if($current_page=='index') { echo 'active';}?>" href="index.php">Home</a>
                    <a class="nav-link <?php if($current_page=='about') { echo 'active';}?>"href="about.php">About</a>
                </nav>
            </div>
        </header>