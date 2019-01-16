<?php
require_once 'component/app.php';

if( !empty( $_GET['query'] ) ){
    $query = trim( htmlspecialchars( $_GET['query'] ) );
    $query = strtolower( $query );

    $results = array();
    foreach( $games as $game ){
        similar_text( strtolower( $game['name'] ), $query, $percent );
        if( $percent >= 70 ){
            $results[] = $game;
        }
    }
}else{
    $results = $games;
}

$pageTitle = 'Liste des jeux';
include_once 'component/header.php';
?>

<?php $counter = count( $results ); ?>
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
            <th>Voir</th>
        </tr>
        <?php foreach( $results as $game ){ ?>
            <tr>
                <td><img src="<?php echo $game['picture']; ?>"></td>
                <td><?php echo $game['name']; ?></td>
                <td><?php echo getGenre( $game['genre'] )['name']; ?></td>
                <td><?php echo truncateDescription( $game['description'] ); ?></td>
                <td><a href="show.php?id=<?php echo $game['id']; ?>">Voir</a></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>

<?php
include_once 'component/footer.php';
?>
