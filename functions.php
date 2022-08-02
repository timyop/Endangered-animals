<?php
function array2ul($array) {
    $out = "<ul>";
    foreach($array as $key => $elem){
        if(!is_array($elem)){
            $out .= "<li><span>" . $key . ": " . $elem . "</span></li>";
        } else {
            $out .= "<li><span>" . $key . "</span>" . array2ul($elem) . "</li>";
        }
    }
    $out .= "</ul>";
    return $out;
}
Share
