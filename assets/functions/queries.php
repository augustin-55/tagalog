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

$cooking = $bdd->query('SELECT * FROM cooking');

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

$portfolio_home = $bdd->query('SELECT * FROM portfolio LIMIT 3');

$categories_portfolio = $bdd->query('SELECT * FROM categories_portfolio');

/* ---------- 3 : Travels ---------- */ 

$categories_travel = $bdd->query('SELECT * FROM categories_travel');

if (isset($current_page) && $current_page == 'travels') {
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        $travels = $bdd->query('SELECT * FROM travels INNER JOIN categories_travel ON travels.category_id = categories_travel.id WHERE category_id = "'.$category.'"');
        $carousel_travels = $bdd->query('SELECT * FROM travels INNER JOIN categories_travel ON travels.category_id = categories_travel.id WHERE category_id = "'.$category.'" AND display_carousel = "1"');
        $count_articles_travel = $bdd->query('SELECT COUNT(*) FROM travels INNER JOIN categories_travel ON travels.category_id = categories_travel.id WHERE category_id = "'.$category.'"');
    }
}

if (isset($current_page) && $current_page == 'display-article-travel') {
    if (isset($_GET['article'])) {
        $article = $_GET['article'];
        $display_article = $bdd->query('SELECT * FROM travels INNER JOIN categories_travel ON travels.category_id = categories_travel.id WHERE travels.id = "'.$article.'"');
        

        
        // $profile_picture_article = $bdd->query('SELECT profile_picture FROM admin INNER JOIN travels ON admin.id = travels. WHERE admin = "'..'"');
    }
}

$travels_home = $bdd->query('SELECT * FROM travels LIMIT 3');

/* ---------- 4 : About us ---------- */

// Countries

$smPhilippines = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id WHERE country_id = "1"');
$smFrance = $bdd->query('SELECT * FROM countries_articles INNER JOIN countries ON countries_articles.country_id = countries.id  WHERE country_id = "2"');

// Songs

$songs = $bdd->query('SELECT * FROM songs INNER JOIN users ON songs.user_id = users.id');

/* ---------- 5 : Accounts ---------- */

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $admin = $bdd->query('SELECT COUNT(*) FROM admin WHERE username = "'.$username.'" AND password = "'.$password.'"');
    var_dump($username);
    var_dump($password);
}

// var_dump($_POST);
