<?php
require_once 'component/app.php';

if( !empty( $_POST['username'] ) && !empty( $_POST['password'] ) ){
    $username = htmlspecialchars( $_POST['username'] );
    $password = htmlspecialchars( $_POST['password'] );

    $user = false;
    foreach( $users as $u ){
        if( $u['username'] == $username ){
            $user = $u;
            break;
        }
    }

    if( $user ){
        if( password_verify( $password, $user['password'] ) ){

            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user;

            $chain = $user['username'] . ':' . $user['password'];
            setcookie( 'user', $chain, time() + 30 * 24 * 3600, null, null, false, true );

            header('Location: index.php');

        }
    }
}

$pageTitle = 'Connexion';
include_once 'component/header.php';
?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Mot de passe">

    <input type="submit" value="Connexion">
</form>

<?php
include_once 'component/footer.php';
?>
