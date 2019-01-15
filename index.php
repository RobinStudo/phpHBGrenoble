<?php
$games = array(
    array(
        'name' => 'The Witcher 3',
        'picture' => 'http://image.jeuxvideo.com/medias/142247/1422469608-7141-jaquette-avant.jpg',
        'genre' => 'Action RPG',
    ),
    array(
        'name' => 'Rocket Loeague',
        'picture' => 'https://rocketleague.media.zestyio.com/rl_site_buy-box_new.f1cb27a519bdb5b6ed34049a5b86e317.jpg',
        'genre' => 'Arcade',
    ),
    array(
        'name' => 'SimCity',
        'picture' => 'https://images-na.ssl-images-amazon.com/images/I/71AflMaW6aL._SY445_.jpg',
        'genre' => 'Simulation',
    ),
);

$userLoggedIn = false;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Liste des jeux</title>

        <style media="screen">
            img{
                width: 70px;
            }
        </style>
    </head>
    <body>
        <div class="">
            <?php if( $userLoggedIn ){ ?>
                Bienvenue Marco
                <a href="#">Déconnexion</a>
            <?php }else{ ?>
                <a href="#">Se connecter</a>
            <?php } ?>
        </div>



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

    </body>
</html>
