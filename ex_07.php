<?php

function addSuffix(string $str, string $suffix = "..."): string
{
    if (str_ends_with($str, $suffix)){
        return $str;
    }else{
        return $str . $suffix;
    }
}


//$test ="test 1 ";
//echo addSuffix($test) . "\n";

//$test2 ="bonjour voici le pb...";
//echo addSuffix($test2) . "\n";
