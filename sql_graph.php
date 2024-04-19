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
    $qry = $dbh->prepare("SELECT 1min_low,2min,3min,4min,5min,6min,7min,8min,9min,10min_up FROM counter");
    $qry->execute();
    $result = $qry->fetchAll(PDO::FETCH_ASSOC);
    require_once("graph.php");
}






