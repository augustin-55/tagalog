<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main logo -->
    <link rel="icon" type="image/png" href="assets/pictures/main-logo.png">
    <!-- Main title -->
    <title>May & Augustin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- My stylesheet -->
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body class="<?php
    // Body background
    if($current_page == 'numbers') {echo 'numbers-body';}
    elseif($current_page == 'index') {echo 'index-body';}
    elseif($current_page == 'training') {echo 'training-body';}
    elseif($current_page == 'cooking') {echo 'cooking-body';}
    elseif($current_page == 'courtesy') {echo 'courtesy-body';}
    elseif($current_page == 'animals') {echo 'animals-body';}
    elseif($current_page == 'travels') {echo 'travels-body';}
    elseif($current_page == 'display-article-travel') {echo 'travels-body';}
    elseif($current_page == 'people') {echo 'people-body';}
    elseif($current_page == 'portfolio') {echo 'portfolio-body';}
    elseif($current_page == 'aboutUs') {echo 'aboutUs-body';}
    elseif($current_page == 'portals') {echo 'portals-body';}
?>">

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="main-title">
            <a class="navbar-brand" href="index.php"><img src="assets/pictures/logo.svg" alt="logo website"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-house-damage"></i>Home<div class="bar-nav-item"></div></a>
                </li>
                <!-- Wedding -->
                <li class="nav-item">
                    <a class="nav-link" href="wedding.php"><i class="fas fa-heart"></i>Wedding</a>
                </li>
                <!-- About us -->
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php?profile=May"><i class="fas fa-heart"></i>About us<div class="bar-nav-item"></div></a>
                </li>
                <!-- Portfolio -->
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php"><i class="fas fa-images"></i>Portfolio<div class="bar-nav-item"></div></a>
                </li>
                <!-- Travels -->
                <li class="nav-item">
                    <a class="nav-link" href="travel-categories.php"><i class="fas fa-route"></i>Travels<div class="bar-nav-item"></div></a>
                </li>
                <!-- Vocabulary -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language"></i>Learning<div class="bar-nav-item"></div></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="courtesy.php">Courtesy</a>
                        <a class="dropdown-item" href="numbers.php">Numbers</a>
                        <a class="dropdown-item" href="cooking.php">Food</a>
                        <a class="dropdown-item" href="animals.php">Animals</a>
                        <a class="dropdown-item" href="people.php">People</a>
                    </div>
                </li>
                <!-- Training -->
                <li class="nav-item d-none">
                    <a class="nav-link" href="training.php"><i class="fas fa-graduation-cap"></i>Training<div class="bar-nav-item"></div></a>
                </li>
            </ul>
        </div>
    </nav>
</header>