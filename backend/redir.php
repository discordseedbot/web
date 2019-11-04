<?php

	$redirJSON = json_decode(file_get_contents("./redir.json"));

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
			case 'status':
				return header("Location: https://seedbot.statuspal.io");
				break;
		}
	}
	function seedRedirectDev($redir) {
		switch ($redir) {
			case 'discord':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'invite':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'patreon':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'roadmap':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'docs':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'github':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'git-stable':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'git-canary':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'git-web':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'git-botapi':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
			case 'status':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
		}
	}
?>
