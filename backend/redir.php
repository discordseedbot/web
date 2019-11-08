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
		$redirectVAR = $redirJSON->$redir[0];
		switch ($redir) {
			case 'discord':
				return header("Location: ".$redirectVAR);
				break;
			case 'invite':
				return header("Location: ".$redirectVAR);
				break;
			case 'patreon':
				return header("Location: ".$redirectVAR);
				break;
			case 'roadmap':
				return header("Location: ".$redirectVAR);
				break;
			case 'docs':
				return header("Location: ".$redirectVAR);
				break;
			case 'github':
				return header("Location: ".$redirectVAR);
				break;
			case 'git-stable':
				$redirone = $redirJSON->$redir[1];
				return header("Location: ".$redirone);
				break;
			case 'git-canary':
				$redirtoo = $redirJSON->$redir[2];
				return header("Location: ".$redirtoo);
				break;
			case 'git-web':
				$redirthr = $redirJSON->$redir[3];
				return header("Location: ".$redirthr);
				break;
			case 'git-botapi':
				$redirfor = $redirJSON->$redir[4];
				return header("Location: ".$redirfor);
				break;
			case 'status':
				return header("Location: ".$redirJSON->$redir[0]);
				break;
		}
	}
?>
