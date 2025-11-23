<?php

function sanitize(string $input): string
{
    
    $step1 = strip_tags($input); 

    $step2 = trim($step1); 

    
    $step3 = strtolower($step2);

    return $step3;
}

