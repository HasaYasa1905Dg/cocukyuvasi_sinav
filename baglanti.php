<?php
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=cocukyuvasi;charset=utf8', 'root', '');
	}
	catch(PDOException $e){
	 	die('Veritabanına bağlanılamadı');
	}

?>
