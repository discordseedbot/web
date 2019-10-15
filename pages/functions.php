<?php
	function seedGenFrame($page) {
		$genFrame = `<iframe height="100%" width="100%" src="`.$page.`">`;
	}
	function seedRedirect($redir) {
		switch ($redir) {
			case 'discord':
				return header("Location: https://discord.gg/VMszsux");
				break;
			case 'invite':
				return header("Location: https://discordapp.com/oauth2/authorize?client_id=423432378640498688&scope=bot&permissions=8");
				break;
			case 'patreon':
				return header("Location: https://patreon.com/jyles_coadward");
				break;
			case 'roadmap':
				return header("Location: https://trello.com/b/bGJcacGd/seedbot");
				break;
			case 'docs':
				return header("Location: https://docs.seedbot.xyz");
				break;
			case 'github':
				return header("Location: https://github.com/discordseedbot");
			case 'git-stable':
				return header("Location: https://github.com/discordseedbot/stable");
				break;
			case 'git-canary':
				return header("Location: https://github.com/discordseedbot/canary");
				break;
			case 'git-web':
				return header("Location: https://github.com/discordseedbot/web");
				break;
			case 'git-botapi':
				return header("Location: https://github.com/discordseedbot/bot-api");
				break;
		}
	}

	function seedPrintPage($page) {
		switch ($page) {
			case 'commands':
				return file_get_contents(__DIR__.'/commands/index.html');
				break;
			case 'stats':
				return file_get_contents(__DIR__.'/stats/index.html');
				break;
			case 'default':
				return file_get_contents(__DIR__.'/default/index.html');
				break;
		}
	}

	function seedBotStatusDIV() {
		if (file_get_contents('https://api.seedbot.xyz?req=userCount') < 1){
			$botOffline = <<<EOF
				<img class="cross" src="https://cdn.seedbot.xyz/web/cross.svg" height="40px"/>
				<div class="status offline">
					<div class="status title">
						SeedBot is Offline
					</div><br>
					<div class="status desc">
						SeedBot is offline, please check our <a href="https://seedbot.xyz?discord">discord server</a> or check our <a href="http://status.dariox.club">status page</a> or my <a href="https://jyles.club?page=twitter">twitter</a>.
					</div>
				</div>
			EOF;
			return $botOffline;
		} else {
			$botOnline = <<<EOF
				<img class="check" src="https://cdn.seedbot.xyz/web/check.svg" height="40px"/>
				<div class="status online">
					<div class="status title">
						SeedBot is Online!
					</div><br>
					<div class="status desc">
					SeedBot should be working fine, if it isn't please join <a href="https://seedbot.xyz?discord">my discord.</a>
					</div>
				</div>
			EOF;
			return $botOnline;
		}
	}
	function seedBotStats($req) {
		if (file_get_contents('http://api.seedbot.xyz?req=userCount') < 1) {
			return "N/A";
		} else {
			switch ($req) {
				case 'userCount':
					return file_get_contents("http://api.seedbot.xyz?req=userCount");
					break;
				case 'guildCount':
					return file_get_contents("http://api.seedbot.xyz?req=guildCount");
					break;
				case 'channelCount':
					return file_get_contents("http://api.seedbot.xyz?req=channelCount");
					break;
				case 'version':
					return file_get_contents("http://api.seedbot.xyz?req=botVersion");
					break;
				case 'build':
					return file_get_contents("http://api.seedbot.xyz?req=botBuild");
					break;
			}
		}
	}