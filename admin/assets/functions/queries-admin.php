<?php 

/* ----- About us ----- */

$countries = $bdd->query('SELECT * FROM countries');
$smAll = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id');

$countCountriesArticles = $bdd->query('SELECT COUNT(*) FROM countries_articles');

/* ----- Vocabulary ----- */

$countVocabulary = $bdd->query('SELECT count(*) FROM cooking');

/* ----- Training ----- */

/* ----- Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM categories_portfolio INNER JOIN portfolio ON categories_portfolio.id = portfolio.category_id');

$countPortfolio = $bdd->query('SELECT COUNT(*) FROM portfolio');
$countPortfolioPhilippines = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "1"');
$countPortfolioFrance = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "2"');

$categories_portfolio = $bdd->query('SELECT * FROM categories_portfolio');

/* ----- Trips ----- */

$travels = $bdd->query('SELECT * FROM categories_travel INNER JOIN travels ON categories_travel.id = travels.category_id');

$categories_travel_select = $bdd->query('SELECT * FROM categories_travel');
$categories_travel_add = $bdd->query('SELECT * FROM categories_travel');

if (isset($_GET['idArticle']) && $_GET['idArticle'] != '') {
    $id_article = $_GET['idArticle'];
}
else {
    $id_article = '1';
}

$update_travels_content = $bdd->query('SELECT * FROM categories_travel INNER JOIN travels ON categories_travel.id = travels.category_id');
$update_travels_category = $bdd->query('SELECT * FROM categories_travel WHERE id = "'.$id_article.'"');