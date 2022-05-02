<?php
function estString($string, $lenght = 32):String {
    $string = trim($string);
    $strLen = strlen($string);
    if($strLen < $lenght) {
        throw new Exception("String must be at least $lenght characters long");
    }
    if($strLen == $lenght) {
        return $string;
    }
    $strResult = $string[0]. $string[$strLen-1];
    for ($i = 1; $i < $strLen - 1; $i++) {
        if($i % 2 == 0 && $string[$i] != ' ') {
            $strResult .= $string[$i];
        }
        if(strlen($strResult) == $lenght)
            break;
    }
    if(strlen($strResult) < $lenght){
        for ($i = 1; $i < $strLen - 1; $i++) {
            if($i % 2 != 0 && $string[$i] != ' ') {
                $strResult .= $string[$i];
            }
            if(strlen($strResult) == $lenght)
                break;
        }
    }
    if(strlen($strResult) < $lenght) {
        throw new Exception("String is not valid");
    }
    return $strResult;
}
