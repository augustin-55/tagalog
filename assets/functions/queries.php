<?php 

/**
 * Var
* 0 : Learning
    * Courtesy
    * Food
    * Animals
* 1 : Training
* 2 : Portfolio
* 3 : Trips
* 4 : Category
*/

$categoryPortfolio = '';

/* ---------- 0 : Learning ---------- */

/* ----- 0.1 : Courtesy ----- */

$courtesy = $bdd->query('SELECT * FROM courtesy');

/* ----- 0.2 : Food ----- */ 

$food = $bdd->query('SELECT * FROM cooking');

/* ----- 0.3 : Animals ----- */ 

$animals = $bdd->query('SELECT * FROM animals');

/* ---------- 2 : Portfolio ---------- */ 

$basicQueryPortfolio = '';

if (isset($_GET['category'])) {
    $val = $_GET['category'];
    $categoryPortfolio = 'WHERE category = "'.$val.'"';
}
else {
    $categoryPortfolio = '';
}

$query = 'SELECT * FROM portfolio INNER JOIN category ON portfolio.category_id = category.id'.' '.$categoryPortfolio.'';

$portfolio = $bdd->query($query);

/* ---------- 3 : Trips ---------- */ 

/* ---------- 4 : Category ---------- */ 

$category = $bdd->query('SELECT * FROM category');