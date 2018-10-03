<?php
/*
URL Format
 */
function urlFormat($str){
    // Strip out all whitespace
    $str = preg_replace('/\s*/', '', $str);

    //Convert the string to all lowercase
    $str = strlower($str);

    //URL encode
    $str = urlencode($str);
    return $str;
}

/*
Format Date
 */
function formatDate($date){
    $date = data("F j, Y, g:i, a", strtotime($date));
    return $date;
}
 ?>
