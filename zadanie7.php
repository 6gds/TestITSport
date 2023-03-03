<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = 'people.txt';
    $name = $_POST["name"];

    file_put_contents($file, $name);
}
