<?php



function charCount(string $str): int{
    return strlen($str);

}



$str = "strlen";

$textsize = charCount($str);

echo $textsize . "\n" ;