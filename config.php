<?php
	$DB_DSN = "mysql:dbname=camagru;host=127.0.0.1;charset=utf8";
	$DB_USER = "root";
	$DB_PASS = "YuB8sL6C";
	$DB_PDO = [
		PDO::ATTR_ERRMODE 			 => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES 	 => false,
	];
?>
