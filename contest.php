<?php
require_once 'component/app.php';

if( !$premium ){
    die( "Vous n'êtes pas premium" );
}

$pageTitle = 'Concours';
include_once 'component/header.php';
?>

<?php for( $i = 0; $i < 10; $i++ ){ ?>
    <a href="#" class="box">
        #<?php echo $i; ?>
    </a>
<?php } ?>

<?php
include_once 'component/footer.php';
?>
