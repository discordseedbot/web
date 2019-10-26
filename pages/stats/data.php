<?php
  Include '../../backend/bot-info.php';
  $botStatus = seedBotStatusDIV();

  $userCount = seedBotStats("userCount");
  $guildCount = seedBotStats("guildCount");
  $channelCount = seedBotStats("channelCount");
  $botVersion = seedBotStats("version");
  $botBuild = seedBotStats("build");
  $buildDate = seedBotStats("buildDate");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SeedBot - Status</title>
		<link href="https://cdn.seedbot.xyz/web/status.css" rel="stylesheet" type="text/css">
	</head>
	<body>
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
		<div class="stats two">
			<?php echo $buildDate ?>
			<div class="statdesc">
				Bot Build Date
			</div>
		</div>
<?php echo $botStatus; ?>
	</body>
</html>
	

