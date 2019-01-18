<?php
require_once 'component/app.php';

if( empty( $_GET['id'] ) ){
    header('Location: index.php');
    exit();
}
$gid = $_GET['id'];

$allowTypes = [
    [
        'type' => 'image/jpeg',
        'ext' => 'jpg',
    ],
    [
        'type' => 'image/png',
        'ext' => 'png',
    ],
];


if( !empty( $_FILES['poster'] ) && $_FILES['poster']['error'] == 0 ){
    if( $_FILES['poster']['size'] < 10000000 ){

        $types = array_column( $allowTypes, 'type' );
        $key = array_search( $_FILES['poster']['type'], $types );
        if( $key !== false ){

            $tmpName = $_FILES['poster']['tmp_name'];
            $ext = '.' . $allowTypes[ $key ]['ext'];
            $name = uniqid( 'game_' . $gid . '_' ) . $ext;

            move_uploaded_file( $tmpName, 'upload/' . $name );
            writeLogUpload( $gid, $name );
        }
    }
}else if( !empty( $_POST['posterUrl'] ) ){
    $url = htmlspecialchars( $_POST['posterUrl'] );
    if( filter_var( $url, FILTER_VALIDATE_URL ) ){
        $content = file_get_contents( $url );
        if( $content ){
            $pos = strrpos( $url, '.' );
            $ext = substr( $url, $pos );
            $name = uniqid( 'game_' . $gid . '_' ) . $ext;
            file_put_contents( 'upload/' . $name, $content );
            writeLogUpload( $gid, $name );
        }
    }
}


$pageTitle = 'Proposer une affiche';
include_once 'component/header.php';
?>

<form method="post" enctype="multipart/form-data">
    <label for="poster">Choissisez une affiche</label>
    <input type="file" name="poster" id="poster">

    <input type="url" name="posterUrl" placeholder="URL de l'image">

    <input type="submit" value="Envoyer">
</form>

<?php
include_once 'component/footer.php';
?>
