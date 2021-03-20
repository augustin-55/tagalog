<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'content') {
        
        if (isset($_POST['title']) && $_POST['title'] != '') {
            $addDate = date('d/m/Y');
            $addBy = $connected_admin;
            $picture = $_POST['picture'];
            $picture1 = $_POST['picture_1'];
            $picture2 = $_POST['picture_2'];
            $picture3 = $_POST['picture_3'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            if (isset($_POST['display-carousel']) && $_POST['display-carousel'] == 'on') {
                $display_carousel = '1';
            }
            else {
                $display_carousel = '0';
            }

            $add = $bdd->prepare('INSERT INTO travels (addDate, addBy, picture, picture_1, picture_2, picture_3, title, description, display_carousel, category_id) VALUES (:addDate, :addBy, :picture, :picture_1, :picture_2, :picture_3, :title, :description, :display_carousel, :category_id)');

            if ($add->execute(array(
                'addDate' => $addDate,
                'addBy' => $addBy,
                'picture' => $picture,
                'picture_1' => $picture1,
                'picture_2' => $picture2,
                'picture_3' => $picture3,
                'title' => $title,
                'description' => $description,
                'display_carousel' => $display_carousel,
                'category_id' => $category,
            ))) {
                $confirmMessage = 'The article '.$title.' is well added in the database. Thanks for your add !  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageTravels=content&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The article '.$title.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageTravels=content&message='.$errorMessage.'');
            }
        }

    }
    else if (isset($_GET['manageTravels']) && $_GET['manageTravels'] == 'category') {
        
        if (isset($_POST['category-list']) && $_POST['category-list'] != '' && isset($_POST['thumbnail']) && $_POST['thumbnail'] != '') {
            $category = $_POST['category-list'];
            $thumbnail = $_POST['thumbnail'];
        
            $add = $bdd->prepare('INSERT INTO categories_travel (category, thumbnail) VALUES (:category, :thumbnail)');
        
            if ($add->execute(array(
                'category' => $category,
                'thumbnail' => $thumbnail
            ))) {
                $confirmMessage = 'The category '.$category.' is well added in the database. Thanks for your add !  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageTravels=category&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The category '.$category.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'You must fill a category and a picture here  <i class="far fa-smile"></i>';
            header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
        }

    }
}