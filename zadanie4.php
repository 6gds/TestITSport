<?php

declare(strict_types=1);

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];

foreach ($arrayMonth as $season) {
    foreach ($season as $month) {
        echo $month;
        echo "</br>";
    }
}
