<?php
// session_start();

// Var

$video = '';

// Import BDD

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

$start = '2020-03-29';
$end = date('Y-m-d');
$datetime1 = new DateTime($start);
$datetime2 = new DateTime($end);
$interval = $datetime1->diff($datetime2);
$nbday= $interval->format('%m');

// User sessions

// $_SESSION['username'] = '';
// $_SESSION['password'] = '';

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



