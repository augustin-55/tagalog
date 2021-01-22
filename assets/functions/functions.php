<?php

// Import BDD

require('env.php');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=tagalog;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Import queries

require('queries.php');