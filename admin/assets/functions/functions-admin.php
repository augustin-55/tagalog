<?php

// BDD
require('env.php');
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tagalog;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    die('Errer : ' . $e->getMessage());
}

// Select form - Articles from "travels"

// Queries
require('queries-admin.php');

// User sessions

if (isset($_POST['confirm-admin']) && $_POST['confirm-admin'] == 'Enter in admin part') {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    if ($username != '' && $password != '') {
        if (isset($username) && $username == 'augustin') {
            $_SESSION['connected_admin'] = 'Augustin';
        }
        else if (isset($username) && $username == 'may') {
            $_SESSION['connected_admin'] = 'May';
        };

        $connected_admin = $_SESSION['connected_admin'];
    }
}
// else {
//     print("<script type=\"text/javascript\">setTimeout('location=(\"error-portal-admin.php?message=Good try... !\")');</script>");
// }
