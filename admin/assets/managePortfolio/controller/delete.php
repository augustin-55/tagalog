<?php

require('../../functions/functions-admin.php');

var_dump($_GET);

if ($_GET['page'] == 'content') {

    $id = $_GET['id'];

    $delete = $bdd->prepare('DELETE FROM portfolio WHERE id = "'.$id.'"');

    if ($delete->execute()) {
        $confirmMessage = 'Bien !';
        header('location: ../../../confirm-portal.php?message='.$confirmMessage.'');
    }
    else {
        $errorMessage = 'Non !';
        // header('location: ../../../error-portal.php?message='.$errorMessage.'');
    }

}
else if ($_GET['page'] == 'category') {

    echo 'category';
}