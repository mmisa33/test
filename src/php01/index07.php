<?php

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo "合格点は" . $total . "なので合格です";
    } else {
        echo "合格点は" . $total . "なので不合格です";
    }
}

$result = exam(100, 20, 50);
echo $result;