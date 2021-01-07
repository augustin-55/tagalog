<?php require('../assets/functions/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>May & Augustin- Admin</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f1c8fa9f91.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- My stylesheet -->
    <link rel="stylesheet" href="../scss/style.css">
</head>
<body class="admin-body">
    
<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="main-title">
            <a class="navbar-brand" href="index.php">May and Augustin</a>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-language"></i>Manage vocabulary</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php">Courtesy</a>
                    </div>
                </li>
                <!-- Training -->
                <li class="nav-item">
                    <a class="nav-link" href="manageTraining.php"><i class="fas fa-graduation-cap"></i>Manage portfolio</a>
                </li>
                <!-- Bucket List -->
                <li class="nav-item">
                    <a class="nav-link" href="manageWishList.php"><i class="fas fa-globe-europe"></i>Manage travel stories</a>
                </li>
            </ul>
        </div>
    </nav>
</header>