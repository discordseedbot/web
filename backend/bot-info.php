<?php
	function seedBotStatusDIV() {
		if (file_get_contents('http://api.seedbot.xyz?req=userCount') < 1){
			return file_get_contents(__DIR__.'/data/botinfo-offline.html');
		} else {
			return file_get_contents(__DIR__.'/data/botinfo-online.html');
		}
	}

	function seedBotStats($req) {
		if (file_Get_contents('http://api.seedbot.xyz?req=userCount') < 1) {
			return "N/A";
		} else {
			switch ($req) {
				case 'userCount':
					return file_Get_contents('http://api.seedbot.xyz?req=userCount');
					break;
				case 'guildCount':
					return file_Get_contents('http://api.seedbot.xyz?req=guildCount');
					break;
				case 'channelCount':
					return file_Get_contents('http://api.seedbot.xyz?req=channelCount');
					break;
				case 'botVersion':
					return file_Get_contents('http://api.seedbot.xyz?req=botVersion');
					break;
				case 'botBuild':
					return file_Get_contents('http://api.seedbot.xyz?req=botBuild');
					break;
				case 'botBuildDate':
					return file_get_contents('http://api.seedbot.xyz?req=botBuildDate');
					break;
				case 'apiVersion':
					return file_get_contents('http://api.seedbot.xyz?req=apiVersion');
					break;
				case 'botBranch':
					return file_get_contents('http://api.seedbot.xyz?req=botBranch');
					break;
				case 'botLicense':
					return file_get_contents('http://api.seedbot.xyz?req=botLicense');
					break;
			}
		}
	}
?>
