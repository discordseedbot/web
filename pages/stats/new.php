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

	<div class="statsWrapper">
		<table class="one">
			<tr>
				<th>User Count</td>
				<td><?php echo $userCount; ?></td>
			</tr>
			<tr>
				<th>Guild Count</th>
				<td><?php echo $guildCount; ?></td>
			</tr>
			<tr>
				<th>Channel Count</th>
				<td><?php echo $channelCount; ?></td>
			</tr>
		</table>
		<table class="two">
			<tr>
				<th>Bot Version</th>
				<td><?php echo $botVersion; ?></td>
			</tr>
			<tr>
				<th>Bot Build</th>
				<td><?php echo $botBuild; ?></td>
			</tr>
			<tr>
				<th>Bot Build Date</th>
				<td><?php echo $botBuildDate; ?></td>
			</tr>
		</table>
		<table class="three">
			<tr>
				<th>API Version</th>
				<td><?php echo $apiVersion; ?></td>
			</tr>
			<tr>
				<th>Bot Branch</th>
				<td><?php echo $botBranch; ?></td>
			</tr>
			<tr>
				<th>Bot License</th>
				<td><?php echo $botLicense; ?></td>
			</tr>
	</div>
</body>