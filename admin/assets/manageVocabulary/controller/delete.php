<?php

require('../../functions/functions-admin.php');

var_dump($_GET);

if ($_GET['manageVocabulary'] == 'courtesy') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM courtesy WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'This group of words is well deleted from the database';
        header('location: ../../../confirm-portal-admin.php?manageVocabulary=courtesy&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, these words can\'t be deleted';
        header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
    }

}
else if ($_GET['manageVocabulary'] == 'food') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM cooking WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'This group of words is well deleted from the database';
        header('location: ../../../confirm-portal-admin.php?manageVocabulary=food&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, these words can\'t be deleted';
        header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
    }

}
else if ($_GET['manageVocabulary'] == 'animals') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM animals WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'This group of words is well deleted from the database';
        header('location: ../../../confirm-portal-admin.php?manageVocabulary=animals&message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'An error occured, these words can\'t be deleted';
        header('location: ../../../error-portal-admin.php?manageVocabulary=animals&message='.$errorMessage.'');
    }

}