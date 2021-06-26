<?php

require('../../functions/functions-admin.php');

if (isset($_GET['managePortfolio']) && $_GET['managePortfolio'] == 'content') {
    var_dump($_POST);

    if (isset($_POST['picture']) && $_POST['picture'] != '' && isset($_POST['category']) && $_POST['category'] != '') {
        $id = $_GET['id'];
        $category = $_POST['category'];
        $picture = $_POST['picture'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $update = $bdd->query('UPDATE portfolio SET title = "'.$title.'", picture = "'.$picture.'", description = "'.$description.'", category_id = "'.$category.'" WHERE id = '.$id.'');

        if ($update->execute()) {
            $confirmMessage = 'The article '.$_POST['title'].' is now updated in the database !';
            header('location: ../../../confirm-portal-admin.php?managePortfolio=content&message='.$confirmMessage.'');
        } else {
            $errorMessage = 'An error occured, the article '. $_POST['title'] .' can\'t be updated';
            header('location: ../../../error-portal-admin.php?managePortfolio=content&message='.$errorMessage.'');
        }
    }
    else {
        $errorMessage = 'You must fill at least a category and a picture for this article <i class="fas fa-frown-open"></i>';
        header('location: ../../../error-portal-admin.php?managePortfolio=content&message='.$errorMessage.'');
    }
}
else if (isset($_GET['managePortfolio']) && $_GET['managePortfolio'] == 'category') {
    var_dump($_POST);

    if (isset($_POST['category']) && $_POST['category'] != '') {
        $id = $_GET['id'];
        $category = $_POST['category'];

        $update = $bdd->query('UPDATE categories_portfolio SET category = "'.$category.'" WHERE id = '.$id.'');

        if ($update->execute()) {
            $confirmMessage = 'The article '.$_POST['category'].' is now updated in the database !';
            header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
        } else {
            $errorMessage = 'An error occured, the article '. $_POST['category'] .' can\'t be updated';
            header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
        }
    }
    else {
        $errorMessage = 'You must fill a name for categories';
        header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
    }
}