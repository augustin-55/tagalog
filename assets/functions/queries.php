<?php 

/**
 * Var
* 0 : Learning
    * Courtesy
    * Food
    * Animals
* 1 : Training
* 2 : Portfolio
* 3 : Travels
* 4 : About us
* 5 : Portals
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

$query = 'SELECT * FROM portfolio INNER JOIN categories_portfolio ON portfolio.category_id = categories_portfolio.id'.' '.$categoryPortfolio.'';

$portfolio = $bdd->query($query);

$categories_pf = $bdd->query('SELECT * FROM categories_portfolio');

/* ---------- 3 : Travels ---------- */ 

$categories_travel = $bdd->query('SELECT * FROM categories_travel');

/* ---------- 4 : About us ---------- */

// Countries

$smPhilippines = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id WHERE country_id = "1"');
$smFrance = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id  WHERE country_id = "2"');

// Songs

$songs = $bdd->query('SELECT * FROM songs INNER JOIN users ON songs.user_id = users.id');

/* ---------- 5 : Portals ---------- */

$admin = $bdd->query('SELECT * FROM admin');

