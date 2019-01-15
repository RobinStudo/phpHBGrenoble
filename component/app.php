<?php
$userLoggedIn = false;
$premium = true;

$games = array(
    array(
        'name' => 'The Witcher 3',
        'picture' => 'http://image.jeuxvideo.com/medias/142247/1422469608-7141-jaquette-avant.jpg',
        'genre' => 4,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'publishor' => 'CD Projekt Red',
        'developer' => 'CD Projekt Red',
        'releaseDate' => '2016-05-13',
        'pressReview' => 10,
        'playerReview' => 15.5,
    ),
    array(
        'name' => 'Rocket Loeague',
        'picture' => 'https://rocketleague.media.zestyio.com/rl_site_buy-box_new.f1cb27a519bdb5b6ed34049a5b86e317.jpg',
        'genre' => 5,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'publishor' => 'Psyonix',
        'developer' => 'Psyonix',
        'releaseDate' => '2016-07-13',
        'pressReview' => 10,
        'playerReview' => 12.5,
    ),
    array(
        'name' => 'SimCity',
        'picture' => 'https://images-na.ssl-images-amazon.com/images/I/71AflMaW6aL._SY445_.jpg',
        'genre' => 3,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'publishor' => 'EA',
        'developer' => 'Ubisoft',
        'releaseDate' => '1998-07-13',
        'pressReview' => 14,
        'playerReview' => 12.5,
    ),
);

$genres = array(
    array( 'id' => 1, 'name' => 'Action', 'warn' => false ),
    array( 'id' => 2, 'name' => 'Aventure', 'warn' => false ),
    array( 'id' => 3, 'name' => 'Gestion', 'warn' => false ),
    array( 'id' => 4, 'name' => 'Horreur', 'warn' => true ),
    array( 'id' => 5, 'name' => 'Sport', 'warn' => false ),
);

require_once 'functions.php';
