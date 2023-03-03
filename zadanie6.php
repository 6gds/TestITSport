<?php

declare(strict_types=1);

$hostname = 'localhost';
$username = 'root';
$password = '123';
$database = 'data';

//В примере некорректен порядок переменных, поэтому ничего кроме ошибки ждать не стоит)
$conn = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database,
);

//Метод получает все даннные из бд data таблицы users
$sql = "SELECT * FROM users";
$resultSet = mysqli_query($conn, $sql);

$deleteUserSql = "DELETE FROM USERS WHERE ID IN (1, 2, 3, 4, 5)";
$resultSet = mysqli_query($conn, $deleteUserSql);
