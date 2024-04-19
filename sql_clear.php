<?php

$dsn = 'mysql:host=localhost;dbname=time_sql';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗";
    exit();
}

if(isset($_POST["graph"]))
{
    $qry = $dbh->prepare("UPDATE counter SET 1min_low = 0, 2min = 0, 3min = 0,4min = 0, 5min = 0,6min = 0,7min = 0,8min = 0,9min = 0,10min_up = 0");
    $qry->execute();
    require_once("index.php");
}