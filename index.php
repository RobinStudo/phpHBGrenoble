<?php
require_once 'component/app.php';

$pageTitle = 'Liste des jeux';
include_once 'component/header.php';
?>

<table>
    <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Genre</th>
    </tr>
    <?php foreach( $games as $game ){ ?>
        <tr>
            <td><img src="<?php echo $game['picture'] ?>"></td>
            <td><?php echo $game['name'] ?></td>
            <td><?php echo $game['genre'] ?></td>
        </tr>
    <?php } ?>
</table>

<?php
include_once 'component/footer.php';
?>
