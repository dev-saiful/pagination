<?php

require 'dbconfig.php';
//page number
$page = 1;
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
// 5 post show in dashboard
$limit = 5;
// Algorithom of offset = how many post will be showed
$offset = $page * $limit - $limit;

$sql = "SELECT * FROM data LIMIT $limit offset $offset";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchALL();

$stmt2 = $conn->prepare("SELECT * FROM data");

$stmt2->execute();

$total_row = $stmt2->rowCount();

$total_page = ceil($total_row / $limit);

