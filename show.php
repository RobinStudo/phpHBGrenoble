<?php
require_once 'component/app.php';

$game = $games[0];
$totalReview = ( $game['pressReview'] + $game['playerReview'] ) / 2;

$pageTitle = $game['name'];
include_once 'component/header.php';
?>

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
<?php
include_once 'component/footer.php';
?>
