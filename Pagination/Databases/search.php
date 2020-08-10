<?php

require "dbconfig.php";

if(isset($_GET['q']))
{
	$q = $_GET['q'];
	$sql = "SELECT * FROM data WHERE Name LIKE :Name or Email LIKE :Email";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(":Name","%".$q."%");
	$stmt->bindValue(":Email","%".$q."%");
	$stmt->execute();
}
else
{
	$sql = "SELECT * FROM data";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}