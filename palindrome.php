<?php 
/**
 * To find palindrome string
 * @param senitizedStr String 
 * @param ignoreSpecialChar boolean 
 */
function isPalindromeString ($senitizedStr, $ignoreSpecialChar) {

    if ($ignoreSpecialChar === true) {
        $senitizedStr = preg_replace("/[^A-Za-z1-9]+/", "", $senitizedStr);
    }

    $strLen = strlen($senitizedStr);
    $limit = floor($strLen/2);


    for ($i = 0; $i < $limit; $i++) {
        if($senitizedStr[$i] !==  $senitizedStr[$strLen-1-$i]) {
            return false;
        }
    }
    return true;
}

$string = "I'madkda mI";
var_dump(isPalindromeString($string , true));
var_dump(isPalindromeString($string , false));


/**
 * #####OUTPUT############
 * /Users/amitesh/Desktop/palindrom.php:22:
 * bool(true)
 * /Users/amitesh/Desktop/palindrom.php:23:
 * bool(false)
 **/