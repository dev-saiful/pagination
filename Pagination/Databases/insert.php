<?php

require "dbconfig.php";
for ($i=1; $i <=20 ; $i++)
{ 
	$sql = "INSERT INTO data (Name,Email) VALUES ('Saiful','saiful@gmail,com')";
	$conn->exec($sql);
}
