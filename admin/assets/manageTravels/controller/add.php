<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'content') {
        if (isset($_POST['title']) && $_POST['title'] != '') {
            $addDate = date('d/m/Y');
            $picture = $_POST['picture'];
            $picture1 = $_POST['picture1'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            if (isset($_POST['display-carousel']) && $_POST['display-carousel'] == 'on') {
                $display_carousel = '1';
            }
            else {
                $display_carousel = '0';
            }

            $add = $bdd->prepare('INSERT INTO travels (addDate, picture, title, description, display_carousel, category_id) VALUES (:addDate, :picture, :title, :description, :display_carousel, :category_id)');

            if ($add->execute(array(
                'addDate' => $addDate,
                'picture' => $picture,
                'pictures' => $picture1,
                'title' => $title,
                'description' => $description,
                'display_carousel' => $display_carousel,
                'category_id' => $category,
            ))) {
                $confirmMessage = 'The article '.$title.' is well added in the database. Thanks for your add ! :D';
                header('location: ../../../confirm-portal-admin.php?manageTravels=content&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
                header('location: ../../../error-portal-admin.php?manageTravels=content&message='.$errorMessage.'');
            }
        }
    }
    else {
        $errorMessage = 'You must fill a category and picture input at least <i class="fas fa-frown-open"></i>';
        header('location: ../../../error-portal-admin.php?manageTravels=content&message='.$errorMessage.'');
    }

    if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'category') {
        if (isset($_POST['category-list']) && $_POST['category-list'] != '') {
            $category = $_POST['category-list'];
            $thumbnail = $_POST['thumbnail'];
        
            $add = $bdd->prepare('INSERT INTO categories_travel (category) VALUES (:category)');
        
            if ($add->execute(array(
                'category' => $category
            ))) {
                $confirmMessage = 'The category '.$category.' is well added in the database. Thanks for your add ! :D';
                header('location: ../../../confirm-portal-admin.php?manageTravels=category&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The category '.$category.' wasn\'t saved - Error while joining the database (or with queries) :/';
                header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'You must fill a category :/';
            header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
        }
    }
}