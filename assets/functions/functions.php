<?php
// session_start();

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

// Count number of months together

$start = '2020-03-29';
$end = date('Y-m-d');
$datetime1 = new DateTime($start);
$datetime2 = new DateTime($end);
$interval = $datetime1->diff($datetime2);
$nbday= $interval->format('%m');

// User sessions

// $_SESSION['username'] = '';
// $_SESSION['password'] = '';

