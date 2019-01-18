<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            if( !empty( $pageTitle ) ){
                echo $pageTitle . " - ";
            }
            ?>GameList
        </title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <style>
            a.box{
                width: 150px;
                height: 150px;
                background-color: red;
                display: inline-block;
                margin: 20px;
                color:white;
                text-align: center;
                line-height: 150px;
            }
            img{
                width: 70px;
            }
        </style>
    </head>
    <body>

        <form action="index.php" method="get">
            <input type="search" name="query" placeholder="Rechercher ...">
            <input type="submit" value="Rechercher">
        </form>

        <div class="">
            <?php if( $userLoggedIn ){ ?>
                Bienvenue <?php echo $_SESSION['user']['username']; ?>
                <a href="logout.php">Déconnexion</a>
            <?php }else{ ?>
                <a href="login.php">Se connecter</a>
            <?php } ?>
        </div>
