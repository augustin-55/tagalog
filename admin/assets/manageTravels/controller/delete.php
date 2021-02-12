<?php

require('../../functions/functions-admin.php');

var_dump($_GET);

if ($_GET['manageTravels'] == 'content') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM travels WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'The article is well deleted from the database !';
        header('location: ../../../confirm-portal-admin.php?manageTravels=pictures&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, this article can\'t be deleted';
        header('location: ../../../error-portal-admin.php?manageTravels=pictures&message='.$errorMessage.'');
    }
}
else if ($_GET['manageTravels'] == 'category') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM categories_travel WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'This category is well deleted from the database !';
        header('location: ../../../confirm-portal-admin.php?manageTravels=category&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, this category can\'t be deleted';
        header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
    }
}