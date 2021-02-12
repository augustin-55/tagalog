<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'content') {
        if ($_POST['name'] != '') {
            $category = $_POST['category'];
            $picture = $_POST['picture'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $addDate = date('Y');

            $add = $bdd->prepare('INSERT INTO travels (addDate, picture, name, description, category_id) VALUES (:addDate, :picture, : :name, :description, :category_id');

            if ($add->execute(array(
                'addDate' => $addDate,
                'picture' => $picture,
                'name' => $name,
                'description' => $description,
                'category_id' => $category
            ))) {
                $confirmMessage = 'The article '.$title.' is well added in the database. Thanks for your add ! :D';
                // header('location: ../../../confirm-portal-admin.php?manageTravels=content&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
                header('location: ../../../error-portal-admin.php?manageTravels=content&message='.$errorMessage.'');
            }
        }
    }
    else {
        $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
        // header('location: ../../../error-portal-admin.php?manageTravels=content&message='.$errorMessage.'');
    }

    if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'category') {
        if (isset($_POST['category-list']) && $_POST['category-list'] != '') {
            $category = $_POST['category-list'];
        
            $add = $bdd->prepare('INSERT INTO categories_travel (category) VALUES (:category)');
        
            if ($add->execute(array(
                'category' => $category
            ))) {
                $confirmMessage = 'The category '.$category.' is well added in the database. Thanks for your add ! :D';
                header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The category '.$category.' wasn\'t saved - Error while joining the database (or with queries) :/';
                header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'You must fill a category :/';
            header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
        }
    }
}