<?php
$game = array(
    'name' => 'The Witcher 3',
    'picture' => 'http://image.jeuxvideo.com/medias/142247/1422469608-7141-jaquette-avant.jpg',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'publishor' => 'CD Projekt Red',
    'developer' => 'CD Projekt Red',
    'Genre' => 'Action RPG',
    'releaseDate' => '2016-05-13',
    'pressReview' => 19,
    'playerReview' => 17.5,
);

$totalReview = ( $game['pressReview'] + $game['playerReview'] ) / 2;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $game['name']; ?> - Jeu</title>
    </head>
    <body>
        <h1><?php echo $game['name']; ?></h1>
        <?php echo '<p>' . $game['description'] . '</p>'; ?>
        <img src="<?php echo $game['picture']; ?>" alt="Affiche du jeu">
        <div><?php echo $totalReview; ?></div>
        <div><?php echo date( 'd/m/Y', strtotime( $game['releaseDate'] )); ?></div>
    </body>
</html>
