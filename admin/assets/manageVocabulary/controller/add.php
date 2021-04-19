<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST)) {
    if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'courtesy') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
           $english = ucfirst($_POST['english']);
           $tagalog = ucfirst($_POST['tagalog']);
           $french = ucfirst($_POST['french']);

           $add = $bdd->prepare('INSERT INTO courtesy (english, tagalog, french) VALUES (:english, :tagalog, :french)');

            if ($add->execute(array(
                'english' => $english,
                'tagalog' => $tagalog,
                'french' => $french,
            ))) {
                $confirmMessage = 'The word '.$english.' is well added in the database in our languages. Thanks for your add !  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=courtesy&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The word '.$english.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'All the fields wasn\'t filled <i class="far fa-tired"></i>';
            header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
        }

    }
    if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'food') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
            $picture = $_POST['picture'];
            $english = ucfirst($_POST['english']);
            $tagalog = ucfirst($_POST['tagalog']);
            $french = ucfirst($_POST['french']);

           $add = $bdd->prepare('INSERT INTO cooking (picture, english, tagalog, french) VALUES (:picture, :english, :tagalog, :french)');

            if ($add->execute(array(
                'picture' => $picture,
                'english' => $english,
                'tagalog' => $tagalog,
                'french' => $french,
            ))) {
                $confirmMessage = 'The word '.$english.' is well added in the database in our languages. Thanks for your add !  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=food&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The word '.$english.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'All the fields wasn\'t filled <i class="far fa-tired"></i>';
            header('location: ../../../error-portal-admin.php?manageVocabulary=food&message='.$errorMessage.'');
        }

    }
    if (isset($_GET['manageVocabulary']) && $_GET['manageVocabulary'] == 'animals') {

        if (isset($_POST['english']) && $_POST['english'] != '' && $_POST['tagalog'] != '' && $_POST['french'] != '') {
            $picture = $_POST['picture'];
            $english = ucfirst($_POST['english']);
            $tagalog = ucfirst($_POST['tagalog']);
            $french = ucfirst($_POST['french']);

           $add = $bdd->prepare('INSERT INTO animals (picture, english, tagalog, french) VALUES (:picture, :english, :tagalog, :french)');

            if ($add->execute(array(
                'picture' => $picture,
                'english' => $english,
                'tagalog' => $tagalog,
                'french' => $french,
            ))) {
                $confirmMessage = 'The word '.$english.' is well added in the database in our languages. Thanks for your add !  <i class="far fa-laugh-beam"></i>';
                header('location: ../../../confirm-portal-admin.php?manageVocabulary=courtesy&message='.$confirmMessage.'');
            }
            else {
                $errorMessage = 'The word '.$english.' wasn\'t saved - Error while joining the database (or with queries)  <i class="far fa-tired"></i>';
                header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
            }
        }
        else {
            $errorMessage = 'All the fields wasn\'t filled <i class="far fa-tired"></i>';
            header('location: ../../../error-portal-admin.php?manageVocabulary=courtesy&message='.$errorMessage.'');
        }

    }
}