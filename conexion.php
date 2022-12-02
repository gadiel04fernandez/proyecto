<?php
$hostName = "localhost";
$dbName = "lugama";
$userName = "root";
$password = "root";
$conection=new mysqli ($hostName, $userName, $password, $dbName, 3307);
	
	if($conection->connect_errno)
	{
		echo "No hay conexión: (" . $conection->connect_errno . ") " . $conection->connect_error;
	}else{
		echo("connectado");
	}
?>