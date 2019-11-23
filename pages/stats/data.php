<?php
	Include '../../backend/bot-info.php';

	$userCount = seedBotStats("userCount");
	$guildCount = seedBotStats("guildCount");
	$channelCount = seedBotStats("channelCount");

	$botVersion = seedBotStats("botVersion");
	$botBuild = seedBotStats("botBuild");
	$botBuildDate = seedBotStats("botBuildDate");

	$apiVersion = seedBotStats("apiVersion");
	$botBranch = seedBotStats("botBranch");
	$botLicense = seedBotStats("botLicense");
?>

<head>
	<title>SeedBot - Stats</title>
	<link href="new.css" rel="stylesheet" type="text/css">
</head>
<body>

	<h1>SeedBot Stats</h1>

	<font>Stats get updated by the bot every miniute, you need to refresh the page yourself, fatass.</font>

	<br><br>
	<table>
		<tr>
			<th>User Count</th>
			<td><?php echo $userCount;?></td>
			<!-- -->
			<th>Bot Version</th>
			<td><?php echo $botVersion;?></td>
			<!-- -->
			<th>API Version</th>
			<td><?php echo $apiVersion;?></td>
		</tr>
		<tr>
			<th>Guild Count</th>
			<td><?php echo $guildCount;?></td>
			<!-- -->
			<th>Bot Build</th>
			<td><?php echo $botBuild;?></td>
			<!-- -->
			<th>Bot Branch</th>
			<td><?php echo $botBranch;?></td>
		</tr>
		<tr>
			<th>Channel Count</th>
			<td><?php echo $channelCount;?></td>
			<!-- -->
			<th>Bot Build Date</th>
			<td><?php echo $botBuildDate;?></td>
			<!-- -->
			<th>Bot License</th>
			<td><?php echo $botLicense;?></td>
		</tr>
	</table>
</body>