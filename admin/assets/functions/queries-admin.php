<?php 
/**
* Var
*  : Learning
    * Courtesy
    * Food
    * Animals
*  : Training
*  : Portfolio
*  : Travels
*  : About us
*  : Portals - Admin account
*  : 
*/

/* -----  : Updates ID ----- */

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id_article = $_GET['id'];
}
else {
    $id_article = '1';
}

/* -----  : About us ----- */

$countries = $bdd->query('SELECT * FROM countries');
$smAll = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id');

$countCountriesArticles = $bdd->query('SELECT COUNT(*) FROM countries_articles');

/* -----  : Vocabulary ----- */

$countVocabulary = $bdd->query('SELECT count(*) FROM cooking');

$update_vocabulary_courtesy = $bdd->query('SELECT * FROM courtesy WHERE id = "'.$id_article.'"');
$update_vocabulary_food = $bdd->query('SELECT * FROM cooking WHERE id = "'.$id_article.'"');
$update_vocabulary_animals = $bdd->query('SELECT * FROM animals WHERE id = "'.$id_article.'"');

/* -----  : Training ----- */

/* -----  : Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM categories_portfolio INNER JOIN portfolio ON categories_portfolio.id = portfolio.category_id');

$countPortfolio = $bdd->query('SELECT COUNT(*) FROM portfolio');
$countPortfolioPhilippines = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "1"');
$countPortfolioFrance = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "2"');

$categories_portfolio_select = $bdd->query('SELECT * FROM categories_portfolio');
$categories_portfolio = $bdd->query('SELECT * FROM categories_portfolio');

$update_portfolio_content = $bdd->query('SELECT * FROM portfolio WHERE id ="'.$id_article.'"');
$update_portfolio_category = $bdd->query('SELECT * FROM categories_portfolio WHERE id = "'.$id_article.'"');

/* ----- 4 : Travels ----- */

$countTravelsArticle = $bdd->query('SELECT COUNT(*) FROM travels');

$categories_travel_select = $bdd->query('SELECT * FROM categories_travel');
$categories_travel_add = $bdd->query('SELECT * FROM categories_travel');

if (isset($_GET['select_category_travels'])) {
    $choose_category = '';
    // var_dump($_GET);

    if ($_GET['select_category_travels'] == 'default') {
        $choose_category = '';
    }
    else {
        $category_travels = $_GET['select_category_travels'];
        // $choose_category = ' WHERE id = "'.$category_travels.'"';
    }

    // echo $category_travels;

    return $choose_category;
}

$travels = $bdd->query('SELECT * FROM categories_travel INNER JOIN travels ON categories_travel.id = travels.category_id');

// echo $travels;

$update_travels_content = $bdd->query('SELECT * FROM travels WHERE id ="'.$id_article.'"');
$update_travels_category = $bdd->query('SELECT * FROM categories_travel WHERE id = "'.$id_article.'"');

// while ($donnees = $update_travels_content->fetch()) {
//     var_dump($donnees);
//     echo $donnees['id'];
// }

/* -----  : Portals - Admin account ----- */

$admin = $bdd->query('SELECT * FROM admin');

if (isset($_SESSION['connected_admin']) && $_SESSION['connected_admin'] != '') {
    $connected_admin_query = $bdd->query('SELECT * FROM admin WHERE username = "'.$_SESSION['username'].'"');
}