<?php
$game = array(
    'name' => 'The Witcher 3',
    'picture' => 'http://image.jeuxvideo.com/medias/142247/1422469608-7141-jaquette-avant.jpg',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    'publishor' => 'CD Projekt Red',
    'developer' => 'CD Projekt Red',
    'genre' => 'Action',
    'releaseDate' => '2016-05-13',
    'pressReview' => 10,
    'playerReview' => 1.5,
);

$totalReview = ( $game['pressReview'] + $game['playerReview'] ) / 2;
$triggerGenre = [ 'Horreur', 'Adulte', 'Gore' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $game['name']; ?> - Jeu</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <?php if( in_array( $game['genre'], $triggerGenre ) ){ ?>
            <div class="">
                Ce jeu est reservé à un public averti
            </div>
        <?php } ?>

        <h1><?php echo $game['name']; ?></h1>
        <?php echo '<p>' . $game['description'] . '</p>'; ?>
        <img src="<?php echo $game['picture']; ?>" alt="Affiche du jeu">
        <div>
            <?php
            if( $totalReview > 15 ){
                echo '<i class="fas fa-grin-beam"></i>';
            }else if( $totalReview >= 10 ){
                echo '<i class="fas fa-smile-beam"></i>';
            }else{
                echo '<i class="fas fa-frown"></i>';
            }

            echo $totalReview;
            ?>
        </div>
        <div><?php echo date( 'd/m/Y', strtotime( $game['releaseDate'] )); ?></div>
    </body>
</html>
