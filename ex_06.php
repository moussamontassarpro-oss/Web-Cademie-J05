<?php

function getFirstWord(string $sentence): string{
$words = explode(' ', trim($sentence));

return $words[0];

}

$phrasetest="tout le monde comment ça va ?";

echo getFirstWord($phrasetest);

