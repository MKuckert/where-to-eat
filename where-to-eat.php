<?php
mt_srand(round(time()/100000)); // Sollte für unsere Zwecke reichen ;)
$dinnerChances=array(
	'Dönermann',
	'Hallo Pizza',
	'Subway',
	'Chinamann',
	'Edeka'
);
$dice=mt_rand()%count($dinnerChances);
$change=$dinnerChances[$dice];
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Where dem food at?</title>
		<style>
body {
	text-align: center;
	margin-top: 10%;
	font-size: 30pt;
	font-family: sans-serif;
}
		</style>
	</head>
	<body>
		<em>Go to</em> <?php echo $change ?>
	</body>
</html>
