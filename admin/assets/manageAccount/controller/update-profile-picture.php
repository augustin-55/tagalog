<?php 

require('../../functions/functions-admin.php');

var_dump($_POST);

if (isset($_POST['picture']) && $_POST['picture'] != '') {

    $path_picture = $_POST['picture'];
    $update_profile_picture = $bdd->query('UPDATE admin SET profile_picture = "'.$path_picture.'" WHERE username = "'.$_SESSION['username'].'"');
    
    if ($update_profile_picture->execute()) {
        $confirmMessage = 'Profile picture successfully updated ! :)';
        header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
    }
}
else {
    $errorMessage = 'You kept the same profile picture :)';
    header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
}