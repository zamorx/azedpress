<?php
session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'www.azedpress.com');
define('DB_USERNAME', 'azedpres_user');
define('DB_PASSWORD', 'Azedpress@2022');
define('DB_DATABASE', 'azedpres_trackingdb');
define("BASE_URL", "http://azedpress.local/tracking/");


function getDB() 
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}