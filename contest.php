<?php
$premium = false;

if( !$premium ){
    header('Location: premium.php'); 
    die( "Vous n'êtes pas premium" );
}

echo 'Vous êtes premium';
