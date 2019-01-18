<?php
// function averageReview( $reviews, $precision = 0 ){
//     $total = 0;
//     foreach( $reviews as $review ){
//         $total += $review;
//     }
//     $average = $total / count( $reviews );
//     return round( $average, $precision );
// }

function averageReview( $reviews, $precision = 0 ){
    $total = array_sum( $reviews );
    $average = $total / count( $reviews );
    return round( $average, $precision );
}

function getGenre( $id ){
    global $genres;
    foreach( $genres as $genre ){
        if( $genre['id'] == $id ){
            return $genre;
        }
    }
}

function truncateDescription( $description, $length = 40 ){
    $short = substr( $description, 0, $length );

    $pos = strrpos( $short, ' ' );
    $short = substr( $short, 0, $pos );

    $short .= ( strlen( $description ) > $pos ) ? '...' : '';
    return $short;
}

function writeLog( $line ){
    $file = fopen( 'prod.log', 'a+' );
    fwrite( $file, $line . PHP_EOL );
    fclose( $file );
}

function writeLogVisit( $gid ){
    $line = '[' . date('Y-m-d H:i:s') . '] ';
    $line .= 'Visit on game ' . $gid;
    $line .= ' from ' . $_SERVER['REMOTE_ADDR'];
    writeLog( $line );
}

function writeLogUpload( $gid, $filename ){
    $line = '[' . date('Y-m-d H:i:s') . '] ';
    $line .= 'Uploaded ' . $filename;
    $line .= ' for ' . $gid;
    writeLog( $line );
}
