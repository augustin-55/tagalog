<?php 

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST['thumbnail'])) {

    if ($_POST['thumbnail'] != '' && isset($_POST['category-list']) && $_POST['category-list'] != '') {

        $id = $_GET['idArticle'];
        $thumbnail = $_POST['thumbnail'];
        $category = $_POST['category-list'];
    
        $update = $bdd->prepare('UPDATE categories_travel SET thumbnail = "'.$thumbnail.'", category = "'.$category.'" WHERE id = '.$id.'');
    
        if ($update->execute()) {
            $confirmMessage = 'The article '.$_POST['category-list'].' is now updated in the database !';
            header('location: ../../../confirm-portal-admin.php?manageTravels=category&message='.$confirmMessage.'');
        } else {
            $errorMessage = 'An error occured, the article '. $_POST['category-list'] .' can\'t be updated';
            header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
        }
    
    } else {
        $errorMessage = 'You must fill a picture and a name for categories';
        header('location: ../../../error-portal-admin.php?manageTravels=category&message='.$errorMessage.'');
    }

}
else if (isset($_POST['picture'])) {



}

