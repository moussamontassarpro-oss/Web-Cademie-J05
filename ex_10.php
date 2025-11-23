<?php

function fullname(string $first, string $last, bool $initialOnly = false): string
{
    if ($initialOnly === true) {

        $formatted_last_name = substr($last, 0, 1) . ".";
    } else {
        $formatted_last_name = $last;
    }

    return $first . " " . $formatted_last_name;
}

//echo "Je m'apelle" . fullname(" Montasar" ,"Moussa", true) . "\n";