<?php 

require('../../functions/functions-admin.php');

if (isset($_POST['new-password']) && $_POST['new-password'] != '' && isset($_POST['confirm-password']) && $_POST['confirm-password'] != '') {
    
    if ($_POST['new-password'] == $_POST['confirm-password']) {

        $new_password = $_POST['new-password'];
        $update_password = $bdd->query('UPDATE admin SET password = "'.$new_password.'" WHERE username = "'.$_SESSION['username'].'"');

        if ($update_password->execute()) {
            $confirmMessage = 'Password successfully updated :)';
            header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
        }
        else {
            $errorMessage = 'The password can\'t be saved, there\'s probably an error with the database';
            header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.''); 
        }
    }
    else {
        $errorMessage = 'The passwords are not the same, please try again :)';
        header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.''); 
    }
}
else {
    $errorMessage = 'You have to fill the two inputs there :/';
    header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
}
