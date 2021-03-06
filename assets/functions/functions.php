<?php

/**
 * 0.1 : Var
 * 0.2 : Import BDD
 * 0.3 : Import queries
 * 0.4 : Count number of months together
 * 0.5 : Functions of video webpage
 * 0.6 : Display articles in different pages - Travel
 * 0.7 : Functions wedding page
*/

// 0.1 : Var

$video = '';

// 0.2 : Import BDD

require('env.php');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=tagalog;charset=utf8', $user, $mdp);
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Import queries

require('queries.php');

// Count number of months together

$startRelationship = '2020-03-29';
$startLove = '2020-06-08';
$now = date('Y-m-d');
$datetime1 = new DateTime($startRelationship);
$datetime2 = new DateTime($now);
$datetime3 = new DateTime($startLove);
$interval = $datetime1->diff($datetime2);
$interval1 = $datetime3->diff($datetime2);
$nbDayRelationship = $interval->format('%m');
$nbDayLove = $interval1->format('%m');

// function video_img_YT($video_url)
// {
//     $video_embed_Img = '';
//     if(!empty($video_url))
//     {
//         $video_url			= video_cleanURL_YT($video_url);
//         $video_ID_array		= explode('/', $video_url );
//         $video_ID			= $video_ID_array[count($video_ID_array)-1]; // élément de l'URL après le dernier /
//         $video_embed_Img 	= 'https://i3.ytimg.com/vi/' . $video_ID . '/hqdefault.jpg'; //pass 0,1,2,3 for different sizes like 0.jpg, 1.jpg
//     }
//     // -----------------
//     return '<img src="' . $video_embed_Img . '" />';
// };

// echo video_img_YT($video);

// while ($donnees = $songs->fetch()) {
//     var_dump($donnees);
// }

// Display articles in different pages - Travel

if (isset($count_articles_travel)) {
    while ($data = $count_articles_travel->fetch()) {
        $nb_articles = $data[0];
        $nb_pages = ceil($nb_articles/3);

        // echo $nb_articles;
        // echo $nb_pages;
    }
}

// Display profile picture in travels articles

// if (isset$current_page == 'display-article-travel') {
//     // echo 'ok';

//     // while ($data = $)

//     // if (isset($data['addBy']) && $data['addBy'] == 'May') {
//     //     echo 'boule';
//     // }
//     // else if (isset($data['addBy']) && $data['addBy'] == 'Augustin') {
//     //     echo 'Auugustinenea';
//     // }
//     // else {
//     //     echo ' - prouit';
//     // }
// }

// var_dump($_SESSION);

// Functions wedding page

$target = mktime(0, 9, 25, 2011); //set marriage date
$DateAndTime = date('Y;m;d;H', time());  
echo "The current date and time are $DateAndTime";
// echo $today;
// $difference =($target-$today);
// $years = date('Y', $difference);
// $months = date('m',$difference);
// $days = date('d',$difference);
// $hours = date('h',$difference);



