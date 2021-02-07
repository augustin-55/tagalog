<?php

require('../../functions/functions-admin.php');

var_dump($_GET);

if ($_GET['managePortfolio'] == 'pictures') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM portfolio WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'The article is well deleted from the database !';
        header('location: ../../../confirm-portal-admin.php?managePortfolio=pictures&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, this article can\'t be deleted';
        header('location: ../../../error-portal-admin.php?managePortfolio=pictures&message='.$errorMessage.'');
    }
}
else if ($_GET['managePortfolio'] == 'category') {

    echo 'category';

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM category WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'This category is well deleted from the database !';
        header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, this category can\'t be deleted';
        header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
    }
}