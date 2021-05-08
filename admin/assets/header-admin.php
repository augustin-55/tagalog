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
    <link rel="stylesheet" href="../assets/scss/style.css">
</head>
<body class="admin-body">
    
<!-- Header -->
<header class="header-admin">
    <nav class="navbar navbar-expand-lg">
        <div class="main-title">
            <a class="navbar-brand" href="index.php"><img src="../assets/pictures/logo.svg" alt="logo website"></a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-heart"></i>About us<div class="bar-nav-item"></div></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="managePortfolio.php?managePortfolio=category">Our meeting</a>
                        <a class="dropdown-item" href="managePortfolio.php?managePortfolio=content">Content</a>
                    </div>
                </li>
                <!-- Portfolio -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-images"></i>Portfolio<div class="bar-nav-item"></div></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="managePortfolio.php?managePortfolio=category">Categories</a>
                        <a class="dropdown-item" href="managePortfolio.php?managePortfolio=content">Content</a>
                    </div>
                </li>
                <!-- Travels -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-route"></i>Travels<div class="bar-nav-item"></div></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="manageTravels.php?manageTravels=category">Categories</a>
                        <a class="dropdown-item" href="manageTravels.php?manageTravels=content">Content</a>
                    </div>
                </li>
                <!-- Vocabulary -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language"></i>Learning<div class="bar-nav-item"></div></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="manageVocabulary.php?manageVocabulary=courtesy">Courtesy</a>
                        <a class="dropdown-item" href="manageVocabulary.php?manageVocabulary=food">Food</a>
                        <a class="dropdown-item" href="manageVocabulary.php?manageVocabulary=animals">Animals</a>
                    </div>
                </li>
                <!-- Training -->
                <li class="nav-item">
                    <a class="nav-link" href="manageTraining.php"><i class="fas fa-graduation-cap"></i>Training</a>
                </li>
                <!-- Account -->
                <li class="nav-item">
                    <a class="nav-link" href="manageAccount.php"><i class="fas fa-users-cog"></i>Account</a>
                </li>
                <!-- Leave -->
                <li class="nav-item">
                    <a class="nav-link" href="logout.php?message=You're now deconnected from your administrator session !"><i class="fas fa-sign-out-alt"></i>Leave</a>
                </li>
            </ul>
        </div>
    </nav>
</header>