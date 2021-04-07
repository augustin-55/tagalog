<?php 

require('../../functions/functions-admin.php');

if (isset($_POST['new-password']) && $_POST['new-password'] != '' && isset($_POST['confirm-password']) && $_POST['confirm-password'] != '') {
    
    if ($update_password->execute()) {
        $confirmMessage = 'Password successfully updated :)';
        header('location: ../../../confirm-portal-admin.php?managePortfolio=category&message='.$confirmMessage.'');
    }
}
else {
    $errorMessage = 'You have to fill the two inputs there :/';
    header('location: ../../../error-portal-admin.php?managePortfolio=category&message='.$errorMessage.'');
}
