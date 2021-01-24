<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

// Portfolio

if (isset($_POST) && $_POST['picture'] != '') {
    $category = $_POST['category'];
    $picture = $_POST['picture'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $addDate = date('Y');

    $add = $bdd->prepare('INSERT INTO portfolio (picture, title, description, addDate, category_id) VALUES (:picture, :title, :description, :addDate, :category_id)');

    if ($add->execute(array(
        'picture' => $picture,
        'title' => $title,
        'description' => $description,
        'addDate' => $addDate,
        'category_id' => $category,
    ))) {
        $confirmMessage = 'Congratulations : Your article is well added in the database. Thanks for your add ! :D';
        header('location: ../../../confirm-portal.php?managePortfolio=content&message='.$confirmMessage.'');
    }
    else {
    
        $errorMessage = 'The entry wasn\'t saved - Error while joining the database (or with queries) :/';
        header('location: ../../../error-portal.php?managePortfolio=content&message='.$errorMessage.'');
    }
}
else {
    $errorMessage = 'You must fill the picture input at least :)';
    header('location: ../../../error-portal.php?managePortfolio=content&message='.$errorMessage.'');
}

// Category

if (isset($_POST) && $_POST['category-list'] != '') {
    $category = $_POST['category-list'];

    $add = $bdd->prepare('INSERT INTO category (category) VALUES (:category)');

    if ($add->execute(array(
        'category' => $category,
    ))) {
        $confirmMessage = 'Congratulations : Your category is well added in the database. Thanks for your add ! :D';
        header('location: ../../../confirm-portal.php?managePortfolio=category&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'The entry wasn\'t saved - Error while joining the database (or with queries) :/';
        header('location: ../../../error-portal.php?managePortfolio=category&message='.$errorMessage.'');
    }
}
else {
    $errorMessage = 'You must fill a category :/';
    header('location: ../../../error-portal.php?managePortfolio=category&message='.$errorMessage.'');
}




