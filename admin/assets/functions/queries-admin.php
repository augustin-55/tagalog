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

/* ----- 1 : About us ----- */

$countries = $bdd->query('SELECT * FROM countries');
$smAll = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id');

$countCountriesArticles = $bdd->query('SELECT COUNT(*) FROM countries_articles');

/* ----- 2 : Vocabulary ----- */

$countVocabulary = $bdd->query('SELECT count(*) FROM cooking');

/* ----- 3 : Training ----- */

/* ----- 4 : Portfolio ----- */

$portfolio = $bdd->query('SELECT * FROM categories_portfolio INNER JOIN portfolio ON categories_portfolio.id = portfolio.category_id');

$countPortfolio = $bdd->query('SELECT COUNT(*) FROM portfolio');
$countPortfolioPhilippines = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "1"');
$countPortfolioFrance = $bdd->query('SELECT COUNT(*) FROM portfolio WHERE category_id = "2"');

$categories_portfolio = $bdd->query('SELECT * FROM categories_portfolio');

/* ----- 5 : Travels ----- */

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

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id_article = $_GET['id'];
}
else {
    $id_article = '1';
}

$update_travels_content = $bdd->query('SELECT * FROM travels WHERE id ="'.$id_article.'"');
$update_travels_category = $bdd->query('SELECT * FROM categories_travel WHERE id = "'.$id_article.'"');

// while ($donnees = $update_travels_content->fetch()) {
//     var_dump($donnees);
//     echo $donnees['id'];
// }

/* ----- 6 : Portals ----- */

$admin = $bdd->query('SELECT * FROM admin');