<?php

$ctx = stream_context_create(array('http'=>
    array(
        'timeout' => 5, //Measured in seconds
    )
));
    if (file_get_contents('http://api.seedbot.xyz?req=userCount', false, $ctx)  < 1) {
    	$botVersion = "N/A";
    	$userCount = "N/A";
    	$channelCount = "N/A";
    	$guildCount = "N/A";
    	$botBuild = "N/A";
    	$botStatus = <<<EOF
   <!DOCTYPE html>
<html>
	<head>
		<title>SeedBot - Statistics</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<img class="check" src="https://cdn.seedbot.xyz/web/cross.svg" height="40px"/>
		<div class="status online">
		    <div class="status title">
		        SeedBot is Offline
		    </div><br>
		    <div class="status desc">
		        SeedBot is offline, please check our <a href="https://seedbot.xyz?discord">discord server</a> or check our <a href="http://status.dariox.club">status page</a> or my <a href="https://jyles.club?page=twitter">twitter</a>.
		    </div>
		</div>
EOF;
    } else {
	    $botVersion = file_get_contents('http://api.seedbot.xyz?req=botVersion', false, $ctx);
	    $userCount = file_get_contents('http://api.seedbot.xyz?req=userCount', false, $ctx);
	    $channelCount = file_get_contents('http://api.seedbot.xyz?req=channelCount', false, $ctx);
	    $guildCount = file_get_contents('http://api.seedbot.xyz?req=guildCount', false, $ctx);
	    $botBuild = file_get_contents('http://api.seedbot.xyz?req=botBuild', false, $ctx);
	    $botStatus = <<<EOF
<!DOCTYPE html>
<html>
	<head>
    		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<meta name="author" content="DARiOX">
    		<meta name="description" content="The Swiss Army Knife of Discord Bots">
		<title>SeedBot - Statistics</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<img class="check" src="check.svg" height="40px"/>
		<div class="status online">
			<div class="status title">
				SeedBot is Online!
			</div><br>
			<div class="status desc">
				SeedBot should be working fine, if it isn't please join <a href="https://seedbot.xyz?discord">my discord.</a>
			</div>
		</div>
EOF;
		echo $botStatus;
    }
?>
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>SeedBot - Status</title>
		<link href="style" rel="stylesheet" type="text/css">
	</head>
	<body>
		...-->
		<h1 class="title">SeedBot Statistics</h1>
		<div class="stats one">
			<?php echo $userCount ?>
			<div class="statdesc">
				User Count
			</div>
		</div>
		<br>
		<div class="stats one">
			<?php echo $guildCount ?>
			<div class="statdesc">
				Guild Count
			</div>
		</div>
		<br>
		<div class="stats one">
			<?php echo $channelCount ?>
			<div class="statdesc">
				Channel Count
			</div>
		</div>
		<br>
		<div class="stats one">
			<?php echo $botVersion ?>
			<div class="statdesc">
				Bot Version
			</div>
		</div>



		<br>
		<div class="stats two">
			<?php echo $botBuild ?>
			<div class="statdesc">
				Bot Build
			</div>
		</div>

	</body>
</html>
	

