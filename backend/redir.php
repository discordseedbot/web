<?php
	function seedMetaRedirect($link) {
		$one = file_get_contents(__DIR__."/data/meta-pt1.html");
		$two = file_get_contents(__DIR__."/data/meta-pt2.html");
		echo $one.$link.$two;
	}

	function seedRedirect($redir) {
		switch ($redir) {
			case 'discord':
				seedMetaRedirect("https://discord.gg/VMszsux");
				break;
			case 'invite':
				seedMetaRedirect("https://discordapp.com/oauth2/authorize?client_id=423432378640498688&scope=bot&permissions=8");
				break;
			case 'patreon':
				seedMetaRedirect("https://patreon.com/jyles_coadward");
				break;
			case 'roadmap':
				seedMetaRedirect("https://trello.com/b/bGJcacGd/seedbot");
				break;
			case 'docs':
				seedMetaRedirect("https://docs.seedbot.xyz");
				break;
			case 'github':
				seedMetaRedirect("https://github.com/discordseedbot");
			case 'git-stable':
				seedMetaRedirect("https://github.com/discordseedbot/stable");
				break;
			case 'git-canary':
				seedMetaRedirect("https://github.com/discordseedbot/canary");
				break;
			case 'git-web':
				seedMetaRedirect("https://github.com/discordseedbot/web");
				break;
			case 'git-botapi':
				seedMetaRedirect("https://github.com/discordseedbot/bot-api");
				break;
			case 'status':
				seedMetaRedirect("https://seedbot.statuspal.io");
				break;
		}
	}


	$redirJSON = json_decode(file_get_contents(__DIR__."./redir.json"));
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

