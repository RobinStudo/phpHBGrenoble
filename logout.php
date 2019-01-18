<?php
session_start();

setcookie( 'user', '');

$_SESSION = array();
session_destroy();

header('Location: contest.php');
?>
