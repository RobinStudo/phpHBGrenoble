















<?php
$premium = true;

if( !$premium ){
    die( "Vous n'êtes pas premium" );
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Concours</title>

        <style>
            a{
                width: 150px;
                height: 150px;
                background-color: red;
                display: inline-block;
                margin: 20px;
                color:white;
                text-align: center;
                line-height: 150px;
            }
        </style>
    </head>
    <body>

        <?php for( $i = 0; $i < 10; $i++ ){ ?>
            <a href="#">
                #<?php echo $i; ?>
            </a>
        <?php } ?>
    </body>
</html>
