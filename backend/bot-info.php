<?php
	function seedBotStatusDIV() {
		if (file_get_contents('https://api.seedbot.xyz?req=userCount') < 1){
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
				case 'version':
					return file_Get_contents('http://api.seedbot.xyz?req=botVersion');
					break;
				case 'build':
					return file_Get_contents('http://api.seedbot.xyz?req=botBuild');
					break;
			}
		}
	}
?>