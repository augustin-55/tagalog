<?php

// Imports

include('env.php');

// BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tagalog;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    die('Errer : ' . $e->getMessage());
}

