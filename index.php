<?php
require_once 'component/app.php';

$pageTitle = 'Liste des jeux';
include_once 'component/header.php';
?>

<?php $counter = count( $games ); ?>
<?php if( $counter == 0 ){ ?>
    <p>Aucun jeu disponible</p>
<?php }else{ ?>
    <p>Il y a <?php echo $counter; ?> jeu(x)</p>

    <table>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Genre</th>
            <th>Description</th>
        </tr>
        <?php foreach( $games as $game ){ ?>
            <tr>
                <td><img src="<?php echo $game['picture']; ?>"></td>
                <td><?php echo $game['name']; ?></td>
                <td><?php echo getGenre( $game['genre'] )['name']; ?></td>
                <td><?php echo truncateDescription( $game['description'] ); ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>

<?php
include_once 'component/footer.php';
?>
