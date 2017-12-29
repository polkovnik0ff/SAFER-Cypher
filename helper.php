<?php

function get_valid_hex($str) {
    $hex = bin2hex($str);

    $length = strlen($hex);

    if ($length < 32) {
        for($i = 0; $i < 32 - $length; $i++) {
            $hex .= "0";
        }
    } 
    elseif ($length >= 32 && $length < 48) {
        $hex = substr($hex, 0, 32);
    }
    elseif ($length >= 48 && $length < 64) {
        $hex = substr($hex, 0, 48);
    }
    elseif ($length >= 64) {
        $hex = substr($hex, 0, 64);
    }

    return $hex;
}


?>