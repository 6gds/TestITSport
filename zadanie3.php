<?php

declare(strict_types=1);

$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44',
];

foreach ($arrayInfo as $userInfoKey => $userInfoValue) {
    echo "$userInfoKey: $userInfoValue";
    echo "</br>";
}
