<?php
session_start();

$userLoggedIn = $_SESSION['auth'] ?? false;
$premium = true;

if( empty( $_COOKIE['lang'] ) ){
    setcookie( 'lang', 'en', time() + 365 * 24 * 3600 );
}

$games = array(
    array(
        'id' => 1,
        'name' => 'The Witcher 3',
        'picture' => 'http://image.jeuxvideo.com/medias/142247/1422469608-7141-jaquette-avant.jpg',
        'genre' => 4,
        'description' => 'Lorem ipsum',
        'publishor' => 'CD Projekt Red',
        'developer' => 'CD Projekt Red',
        'releaseDate' => '2016-05-13',
        'pressReview' => 10,
        'playerReview' => 15.5,
    ),
    array(
        'id' => 2,
        'name' => 'Rocket Loeague',
        'picture' => 'https://rocketleague.media.zestyio.com/rl_site_buy-box_new.f1cb27a519bdb5b6ed34049a5b86e317.jpg',
        'genre' => 5,
        'description' => 'Lorem ipsum dolor sit amet, consecteturqsdmlkfkqsljkdfqsfl adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'publishor' => 'Psyonix',
        'developer' => 'Psyonix',
        'releaseDate' => '2016-07-13',
        'pressReview' => 10,
        'playerReview' => 12.5,
    ),
    array(
        'id' => 3,
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

$users = array(
    array(
        'username' => 'meco',
        'email' => 'exemple@mail.com',
        'password' => '$2y$10$EbubL5PIQ/9/huQ0NVcLGevdNfpZZVi/xCrhMSWMUnrfjHfUNrdWu',
    )
);

if( !$userLoggedIn && !empty( $_COOKIE['user'] ) ){
    $creds = explode( ':', $_COOKIE['user'] );

    $user = false;
    foreach( $users as $u ){
        if( $u['username'] == $creds[0] ){
            $user = $u;
            break;
        }
    }

    if( $user ){
        if( $user['password'] == $creds[1] ){

            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user;

            $chain = $user['username'] . ':' . $user['password'];
            setcookie( 'user', $chain, time() + 30 * 24 * 3600, null, null, false, true );
        }
    }
}

require_once 'functions.php';
