<?php 

/* -----  ----- */

/* ----- About us ----- */

$countries = $bdd->query('SELECT * FROM countries');

$smAll = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id');

/* ----- Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM category INNER JOIN portfolio ON category.id = portfolio.category_id');

/* ----- Category ----- */

$category = $bdd->query('SELECT * FROM category');