<?php
require_once 'component/app.php';

if( empty( $_GET['id'] ) ){
    header('Location: index.php');
    exit();
}

$gamesIds = array_column( $games, 'id' );
$key = array_search( $_GET['id'], $gamesIds );

if( $key === false ){
    header('Location: index.php');
    exit();
}

$game = $games[ $key ];

$totalReview = averageReview([
     $game['pressReview'], $game['playerReview']
 ], 1);
 $genre = getGenre( $game['genre'] );

$releaseTime = strtotime( $game['releaseDate'] );
$since = time() - $releaseTime;

$comments = array();
if( !empty( $_POST['username'] ) && !empty( $_POST['content'] ) ){
    $username = trim( htmlspecialchars( $_POST['username'] ) );
    $content = trim( htmlspecialchars( $_POST['content'] ) );

    if( preg_match( '/^[A-Za-z0-9]{3,16}$/', $username ) ){
        if( strlen( $content ) > 10 ){
            $comment = [
                'username' => $username,
                'content' => $content,
                'createdAt' => time(),
            ];

            $comments[] = $comment;
        }else{
            $error = "Votre commentaire doit contenir au minimum 10 caractères";
        }
    }else{
        $error = "Votre nom d'utilisateur doit être alphanumérique entre 3 et 16 caractères";
    }
}else if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $error = "Vous devez remplir tous les champs";
}

$pageTitle = $game['name'];
include_once 'component/header.php';
?>

<?php if( $genre['warn'] === true ){ ?>
    <div class="">
        Ce jeu est reservé à un public averti
    </div>
<?php } ?>

<h1><?php echo strtoupper( $game['name'] ); ?></h1>
<?php echo '<p>' . $game['description'] . '</p>'; ?>
<img src="<?php echo $game['picture']; ?>" alt="Affiche du jeu">
<div>
    <?php
    if( $totalReview > 15 ){
        echo '<i class="fas fa-grin-beam"></i>';
    }else if( $totalReview >= 10 ){
        echo '<i class="fas fa-smile-beam"></i>';
    }else{
        echo '<i class="fas fa-frown"></i>';
    }

    echo $totalReview;
    ?>
</div>
<div class="">
    <?php echo $genre['name']; ?>
</div>
<div>
    <?php echo date( 'd/m/Y', $releaseTime ); ?><br/>
    Le jeu est sortie il y <?php echo $since; ?> secondes
</div>

<form method="post">
    <p style="color:red;"><?php echo $error ?? ''; ?></p>
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <textarea name="content" rows="8" cols="80"></textarea>
    <button type="submit">Commenter</button>
</form>

<div>
    <?php foreach( $comments as $comment ){ ?>
        <div>
            <span><?php echo $comment['username']; ?></span>
            <p><?php echo $comment['content']; ?></p>
            <span>Publié a : <?php echo date( 'd/m/Y H:i', $comment['createdAt'] ); ?></span>
        </div>
    <?php } ?>
</div>

<a href="upload.php?id=<?php echo $game['id']; ?>">Ajouter une nouvelle affiche</a>
<?php
include_once 'component/footer.php';
?>
