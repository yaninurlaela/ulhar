<?php

$bulan = 5;
switch($bulan){
    case(1 - 3):
        echo "musim dingin";
        break;
    case(4 - 6):
        echo "musim semi";
        break;
    case(7 - 9):
        echo "musim panas";
    case(10 - 12):
        echo "musim gugur";
        break;
    default:
    echo "tidak musim";
}