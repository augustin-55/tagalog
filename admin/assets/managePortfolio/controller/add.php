<?php

require('../../functions/functions-admin.php');

var_dump($_POST);

// Portfolio

if (isset($_POST) && $_POST['picture'] != '') {
    $picture = $_POST['picture'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $addDate = date('Y-m-d');

    $addPortfolio = $bdd->query('INSERT INTO portfolio (picture, title, description, addDate) VALUES ("'.$picture.'", "'.$title.'", "'.$description.'", "'.$addDate.'"');
}
else {
    echo 'Remplir titre';
}

// Category

