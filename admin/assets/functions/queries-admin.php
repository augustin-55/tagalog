<?php 

/* -----  ----- */

/* -----  ----- */

/* ----- Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM category INNER JOIN portfolio ON category.id = portfolio.category_id');

/* ----- Category ----- */

$category = $bdd->query('SELECT * FROM category');