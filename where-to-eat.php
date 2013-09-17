<?php
$date=date_create();
$date->setTime(0,0,0);
$seed=$date->getTimestamp();
mt_srand($seed);

$dinnerChances=array(
	'Doenermann',
	'Hallo Pizza',
	'Subway',
	'Edeka'
);
$dice=mt_rand()%count($dinnerChances);
$change=$dinnerChances[$dice];
?><!DOCTYPE HTML>
<!-- c64 style from http://dl.dropboxusercontent.com/u/144888/wordpress/2011-03-16-commodore -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Where dem food at?</title>
		<link rel="stylesheet" type="text/css" href="c64.css">
	</head>

	<body class="bg-type1">
	<div id="original" class="bg-type2 basicscreen font-type1 text-space">
	    <div class="txt-header">
		<ul class="txt-header-list">
		    <li>**** COMMODORE 64 BASIC V2 ****</li>
		    <li>64K RAM SYSTEM 38911 BASIC BYTES FREE</li>
		</ul>
		READY.<br>
		LOAD "*",8,1<br>
		<br>
		SEARCHING FOR *<br>
		LOADING<br>
		READY.<br>
		RUN<br>
		<br>
		TODAYS PLACE OF HUNGER'S FULFILLMENT SHALL BE<br>
		<?php echo $change; ?><br>	
		<br>
		<br>
		READY.<br>
	    </div>
        <img src="prompt.gif">
	</div>
    </body>
</html>
