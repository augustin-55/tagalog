<?php 

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    $id = $_GET['id'];

    if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'courtesy') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
            $english = $_POST['english'];
            $tagalog = $_POST['tagalog'];
            $french = $_POST['french'];

            $update = $bdd->prepare('UPDATE courtesy SET english = "'.$english.'", tagalog = "'.$tagalog.'", french = "'.$french.'" WHERE id = '.$id.'');

            if ($update->execute()) {
                $confirmMessage = 'The word '.$english.' is well updated in the database  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=courtesy&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The word '.$english.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
            }

        }
        else {
            $errorMessage = 'Seems like all the fields are not entered';
            header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
        }

    }

    else if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'food') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
            $id = $_GET['id'];
            
            if ($_POST['picture'] != '') {
                $picture = $_POST['picture'];  
            }
            else {
                $preview_picture = $bdd->query('SELECT picture FROM cooking WHERE id = "'.$id.'"');
                while ($data = $preview_picture->fetch()) {
                    $picture = $data['picture'];
                }
            }

            $english = $_POST['english'];
            $tagalog = $_POST['tagalog'];
            $french = $_POST['french'];

            $update = $bdd->prepare('UPDATE cooking SET picture = "'.$picture.'", english = "'.$english.'", tagalog = "'.$tagalog.'", french = "'.$french.'" WHERE id = '.$id.'');

            if ($update->execute()) {
                $confirmMessage = 'The word '.$english.' is well updated in the database  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=food&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'An error occured, the group of words "'. $english .'" can\'t be updated';
                header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'Seems like all the fields are not entered';
            header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
        }

    }

    else if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'animals') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
            $id = $_GET['id'];
            
            if ($_POST['picture'] != '') {
                $picture = $_POST['picture'];  
            }
            else {
                $preview_picture = $bdd->query('SELECT picture FROM animals WHERE id = "'.$id.'"');
                while ($data = $preview_picture->fetch()) {
                    $picture = $data['picture'];
                }
            }

            $english = $_POST['english'];
            $tagalog = $_POST['tagalog'];
            $french = $_POST['french'];

            $update = $bdd->prepare('UPDATE animals SET picture = "'.$picture.'", english = "'.$english.'", tagalog = "'.$tagalog.'", french = "'.$french.'" WHERE id = '.$id.'');

            if ($update->execute()) {
                $confirmMessage = 'The word '.$english.' is well updated in the database  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=food&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'An error occured, the group of words "'. $english .'" can\'t be updated';
                header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'Seems like all the fields are not entered';
            header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
        }

    }
}
