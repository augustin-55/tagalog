<?php require('assets/functions/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main title -->
    <title>May & Augustin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- My stylesheet -->
    <link rel="stylesheet" href="scss/style.css">
</head>
<body class="<?php
        // Body background
        if($current_page == 'numbers') {echo 'numbers-body';}
        elseif($current_page == 'index') {echo 'index-body';}
        elseif($current_page == 'training') {echo 'training-body';}
        elseif($current_page == 'cooking') {echo 'cooking-body';}
        elseif($current_page == 'courtesy') {echo 'courtesy-body';}
        elseif($current_page == 'animals') {echo 'animals-body';}
        elseif($current_page == 'wishList') {echo 'wishList-body';}
        elseif($current_page == 'people') {echo 'people-body';}
        elseif($current_page == 'portfolio') {echo 'portfolio-body';}
        elseif($current_page == 'aboutUS') {echo 'aboutUs-body';}
    ?>">

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="main-title">
                <a class="navbar-brand" href="index.php"><img src="assets/pictures/logo1.svg" alt="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-house-damage"></i>Home</a>
                    </li>
                    <!-- Vocabulary -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language"></i>Learning</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="courtesy.php">Courtesy</a>
                            <a class="dropdown-item" href="numbers.php">Numbers</a>
                            <a class="dropdown-item" href="cooking.php">Food</a>
                            <a class="dropdown-item" href="animals.php">Animals</a>
                            <a class="dropdown-item" href="people.php">People</a>
                        </div>
                    </li>
                    <!-- Training -->
                    <li class="nav-item">
                        <a class="nav-link" href="training.php"><i class="fas fa-graduation-cap"></i>Training</a>
                    </li>
                    <!-- About us -->
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php"><i class="fas fa-heart"></i>About us</a>
                    </li>
                    <!-- Portfolio -->
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php"><i class="fas fa-images"></i>Portfolio</a>
                    </li>
                    <!-- Bucket List -->
                    <li class="nav-item">
                        <a class="nav-link" href="wishList.php"><i class="fas fa-globe-europe"></i>Trips</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>