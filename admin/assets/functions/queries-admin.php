<?php 

/* ----- About us ----- */

$countries = $bdd->query('SELECT * FROM countries');
$smAll = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id');

$countCountriesArticles = $bdd->query('SELECT COUNT(*) FROM countries_articles');

/* ----- Vocabulary ----- */

$countVocabulary = $bdd->query('SELECT count(*) FROM cooking');

/* ----- Training ----- */

/* ----- Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM category INNER JOIN portfolio ON category.id = portfolio.category_id');

$countPortfolio = $bdd->query('SELECT COUNT(*) FROM portfolio');
$countPortfolioPhilippines = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "1"');
$countPortfolioFrance = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "2"');

/* ----- Category ----- */

$category = $bdd->query('SELECT * FROM category');

/* ----- Trips ----- */

$countDreamplace = $bdd->query('SELECT COUNT(*) FROM dreamplace');
$countFeedback = $bdd->query('SELECT COUNT(*) FROM feedback');
