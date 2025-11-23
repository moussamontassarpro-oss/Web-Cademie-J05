<?php


function yell(string $str): void{
    echo strtoupper($str);
}

$strtoupperTest="strtoupper\n";

yell($strtoupperTest);
