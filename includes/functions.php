<?php 

function runtime_prettier($minutes) {
    $hours = floor($minutes / 60);
    $remaining_minutes = $minutes % 60;

    $result = '';

    if($hours > 0) {
        $result .= $hours . ' hour' . ($hours > 1 ? 's' : '');
    }

    if ($remaining_minutes > 0) {
        if ($hours > 0) {
            $result .= ' ';
        }
        $result .= $remaining_minutes . ' minute' . ($remaining_minutes > 1 ? 's' : '');
    }
    return $result;
} 

function check_old_movie($release_year) {
    $current_year = date("Y");
    $age = $current_year - $release_year;
    if ($age > 40) {
        return $age;
    } else {
        return false;
    }
}
?>
