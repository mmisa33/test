<?php

function addNumber($a, $b)
{
    $total = $a += $b;
    return $total;
}

$add = addNumber(2, 3);
echo $add;