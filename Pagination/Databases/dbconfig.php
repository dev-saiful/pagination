<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pagination";

try
{
	$dsn = "mysql:host=$host;dbname=$dbname";
	$conn = new PDO($dsn,$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	//echo "Error :". $e->getMessage();
}
