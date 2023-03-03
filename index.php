<?php

declare(strict_types=1);

$arrayNumber = [1, 4, 5, 6, 9, 2];

sort($arrayNumber);

foreach ($arrayNumber as $number) {
    echo $number . " ";
}
