<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    if (isset($_GET['managePortfolio']) && $_GET['managePortfolio'] == 'pictures') {
        if (isset($_POST['picture']) && $_POST['picture'] != '') {
            $category = $_POST['category'];
            $picture = $_POST['picture'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $addDate = date('Y');
        
            $add = $bdd->prepare('INSERT INTO portfolio (addDate, picture, title, description, category_id) VALUES (:addDate, :picture, :title, :description, :category_id)');
        
            if ($add->execute(array(
                'addDate' => $addDate,
                'picture' => $picture,
                'title' => $title,
                'description' => $description,
                'category_id' => $category
            ))) {
                $confirmMessage = 'The article '.$title.' is well added in the database. Thanks for your add ! :D';
                header('location: ../../../confirm-portal-admin.php?managePortfolio=pictures&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
                header('location: ../../../error-portal-admin.php?managePortfolio=pictures&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
            header('location: ../../../error-portal-admin.php?managePortfolio=pictures&message='.$errorMessage.'');
        }
    }

    if (isset($_GET['managePortfolio']) && $_GET['managePortfolio'] == 'category') {
        if (isset($_POST['category-list']) && $_POST['category-list'] != '') {
            $category = ucfirst($_POST['category-list']);
        
            $add = $bdd->prepare('INSERT INTO categories_portfolio (category) VALUES (:category)');
        
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

// Portfolio



// Category






