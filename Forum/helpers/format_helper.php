<?php
/*
URL Format
 */
function urlFormat($str){
    // Strip out all whitespace
    $str = preg_replace('/\s*/', '', $str);

    //Convert the string to all lowercase
    $str = strtolower($str);

    //URL encode
    $str = urlencode($str);
    return $str;
}

/*
Format Date
 */
function formatDate($date){
    $date = date("F j, Y, g:i, a", strtotime($date));
    return $date;
}
 ?>
