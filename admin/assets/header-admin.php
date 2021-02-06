<?php require('assets/functions/functions-admin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main logo -->
    <link rel="icon" type="image/png" href="../assets/pictures/main-logo.png">
    <!-- Main title -->
    <title>May & Augustin - Admin</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f1c8fa9f91.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My stylesheet -->
    <link rel="stylesheet" href="../scss/style.css">
</head>
<body class="admin-body">
    
<!-- Header -->
<header class="header-admin">
    <nav class="navbar navbar-expand-lg">
        <div class="main-title">
            <a class="navbar-brand" href="index.php">May & Augustin - Admin</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-house-damage"></i>Home</a>
                    <div class="bar-nav-item"></div>
                </li>
                <!-- About us -->
                <li class="nav-item">
                    <a class="nav-link" href="manageAboutUs.php"><i class="fas fa-grin-hearts"></i>About us</a>
                </li>
                <!-- Vocabulary -->
                <li class="nav-item">
                    <a class="nav-link" href="manageVocabulary.php"><i class="fas fa-language"></i>Vocabulary</a>
                </li>
                <!-- Training -->
                <li class="nav-item">
                    <a class="nav-link" href="manageTraining.php"><i class="fas fa-graduation-cap"></i>Training</a>
                </li>
                <!-- Portfolio -->
                <li class="nav-item">
                    <a class="nav-link" href="managePortfolio.php"><i class="fas fa-graduation-cap"></i>Portfolio</a>
                </li>
                <!-- Bucket List -->
                <li class="nav-item">
                    <a class="nav-link" href="manageWishList.php"><i class="fas fa-globe-europe"></i>Trips</a>
                </li>
            </ul>
        </div>
    </nav>
</header>