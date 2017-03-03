<?php

$dbUser = 'admin_tyler';
$dbPassword = 'password123';
$dbName = 'classnotes';
$dbHost = 'localhost';
$dbPort = '5432';
try
{
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
    echo "Could not connect to database.";
    die();
}
?>