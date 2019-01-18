<?php
require_once 'component/app.php';

if( !empty( $_POST['username'] ) && !empty( $_POST['email'] ) && !empty( $_POST['password'] ) ){
    $username = htmlspecialchars( $_POST['username'] );
    $email = htmlspecialchars( $_POST['email'] );
    $password = htmlspecialchars( $_POST['password'] );

    if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
        if( strlen( $password ) >= 8 ){

            $user = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash( $password, PASSWORD_DEFAULT ),
            ];

            $users[] = $user;
        }
    }
}

$pageTitle = 'Inscription';
include_once 'component/header.php';
?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">

    <input type="submit" value="Inscription">
</form>

<?php
include_once 'component/footer.php';
?>
