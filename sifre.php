<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

	$veri = '1234';
$sifreleme_yontemi = 'AES-128-ECB';
$anahtar = 'ozcan';
$sifrelenmis_hal = openssl_encrypt($veri, $sifreleme_yontemi, $anahtar);

?>
</body>
</html>
