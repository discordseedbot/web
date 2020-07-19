<?php

function statsPage() {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$userCount = file_get_contents("https://api.seedbot.xyz?req=userCount");
	$guildCount = file_get_contents("https://api.seedbot.xyz?req=guildCount");
	$channelCount = file_get_contents("https://api.seedbot.xyz?req=channelCount");

	$botVersion = file_get_contents("https://api.seedbot.xyz?req=botVersion");
	$botBuild = file_get_contents("https://api.seedbot.xyz?req=botBuild");
	$botBuildDate = file_get_contents("https://api.seedbot.xyz?req=botBuildDate");

	$apiVersion = file_get_contents("https://api.seedbot.xyz?req=apiVersion");
	$botBranch = file_get_contents("https://api.seedbot.xyz?req=botBranch");
	$botLicense = file_get_contents("https://api.seedbot.xyz?req=botLicense");

	$content = <<<EOF
	<table>
		<thead>
			<tr>
				<th>Request</th>
				<th>Result</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>User Count</td>
				<td>$userCount</td>
			</tr>
			<tr>
				<td>Guild Count</td>
				<td>$guildCount</td>
			</tr>
			<tr>
				<td>Channel Count</td>
				<td>$channelCount</td>
			</tr>
			<tr>
				<td>Bot Version</td>
				<td>$botVersion</td>
			</tr>
			<tr>
				<td>Bot Build</td>
				<td>$botBuild</td>
			</tr>
			<tr>
				<td>Bot Build Date</td>
				<td>$botBuildDate</td>
			</tr>
		</tbody>
	</table>
EOF;

	return $content;
}

?>
