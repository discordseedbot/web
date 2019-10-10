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
				return header("Location: https://patreon.com/jyles_coadward");;
				break;
			case 'roadmap':
				return header("Location: https://trello.com/b/bGJcacGd/seedbot");;
				break;
			case 'docs':
				return header("Location: https://docs.seedbot.xyz");
				break;
			case 'github':
				return header("Location: https://github.com/discordseedbot");
			case 'git-stable':
				return header("Location: https://github.com/discordseedbot/stable");;
				break;
			case 'git-canary':
				return header("Location: https://github.com/discordseedbot/canary");;
				break;
			case 'git-web':
				return header("Location: https://github.com/discordseedbot/web");;
				break;
			case 'git-botapi':
				return header("Location: https://github.com/discordseedbot/bot-api");;
				break;
		}
	}

	function seedPrintPage($page) {
		switch ($page) {
			case 'commands':
				return file_get_contents(__DIR__.'./commands/index.html');
				break;
			case 'stats':
				return file_get_contents(__DIR__.'./stats/index.html');
				break;
			case 'default':
				return file_get_contents(__DIR__.'./default/index.html');
				break;
		}
	}


	//template
//
//			case '':
//				return ;
//				break;