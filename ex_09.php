<?php

function contains(string $haystack, string $needle): bool
{
    return str_contains($haystack, $needle);
}

//$test ="Bonjour le monde";

//echo (contains($test, "monde") ? "Vrai" : "Faux" . "\n");
