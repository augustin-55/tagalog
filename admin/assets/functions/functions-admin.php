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