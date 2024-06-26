<?php
$host = "db";
$db = "mydatabase";
$user = "user";
$pass = "password";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try
{
    $connection = new PDO($dsn, $user, $pass, $opt);
    // echo "Verbinding is gemaakt.";
}
catch (PD0Exception $e)
{
    echo $e->getMessage();
    die("Sorry, Database probleem");
}
