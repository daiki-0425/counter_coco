<?php
// MySQLデータベースに接続
$dsn = 'mysql:host=localhost;dbname=time_sql';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    exit();
}

if(isset($_POST["1min_low"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 1min_low = 1min_low + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["1min_low_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 1min_low = 1min_low - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["2min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 2min = 2min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["2min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 2min = 2min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["3min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 3min = 3min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["3min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 3min = 3min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["4min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 4min = 4min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["4min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 4min = 4min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["5min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 5min = 5min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["5min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 5min = 5min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["6min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 6min = 6min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["6min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 6min = 6min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["7min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 6min = 6min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["7min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 7min = 7min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
if(isset($_POST["8min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 6min = 6min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["8min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 8min = 8min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["9min"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 9min = 9min + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["9min_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 9min = 9min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
if(isset($_POST["10min_up"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 10min_up = 10min_up + 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}
else if(isset($_POST["10min_up_red"]))
{
    $date = new DateTime();
    $date_H = $date->format("H:00:00");
    $qry = $dbh->prepare("UPDATE counter SET 10min = 10min - 1 WHERE time_hour = '" . $date_H . "'");
    $qry->execute();
}

if(isset($_POST["graph"]))
{
    echo "Hello";
}


require_once("botton.html");