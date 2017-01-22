<?php $dsn = 'mysql:host=localhost;dbname=test';
	$user = 'root';
	$password = '';
	 
	try {
		$db = new PDO($dsn, $user, $password);
		$db->exec('SET NAMES `UTF-8`');
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
?>