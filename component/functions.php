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
