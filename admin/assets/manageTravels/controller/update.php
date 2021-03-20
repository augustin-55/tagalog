<?php 

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST['thumbnail'])) {

    if (isset($_POST['category-list']) && $_POST['category-list'] != '') {
        $id = $_GET['id'];
        // $thumbnail = $_POST['thumbnail'];

        if ($_POST['thumbnail'] != '') {
            $thumbnail = $_POST['thumbnail'];  
        }
        else {
            $preview_picture = $bdd->query('SELECT thumbnail FROM categories_travel WHERE id = "'.$id.'"');
            while ($data = $preview_picture->fetch()) {
                $thumbnail = $data['thumbnail'];
            }
        }

        $category = $_POST['category-list'];
    
        $update = $bdd->query('UPDATE categories_travel SET thumbnail = "'.$thumbnail.'", category = "'.$category.'" WHERE id = '.$id.'');
    
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

    if (isset($_POST['']))

}

