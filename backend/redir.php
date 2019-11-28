<?php
	function seedMetaRedirect($link) {
		echo "<script>window.location='".$link."'</script>";
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
			case 'privacy':
				seedMetaReditect("https://dariox.club/privacy.html");
				break;
		}
	}


	function seedRedirectDev($redir) {
		$redirJSON = json_decode(file_get_contents(__DIR__."./redir.json"));
		$redirectVAR = $redirJSON->$redir[0];
		switch ($redir) {
			case 'discord':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'invite':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'patreon':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'roadmap':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'docs':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'github':
				header("Location: ".$redirectVAR);
				exit; break;
			case 'git-stable':
				$redirone = $redirJSON->$redir[1];
				header("Location: ".$redirone);
				exit; break;
			case 'git-canary':
				$redirtoo = $redirJSON->$redir[2];
				header("Location: ".$redirtoo);
				exit; break;
			case 'git-web':
				$redirthr = $redirJSON->$redir[3];
				header("Location: ".$redirthr);
				exit; break;
			case 'git-botapi':
				$redirfor = $redirJSON->$redir[4];
				header("Location: ".$redirfor);
				exit; break;
			case 'status':
				header("Location: ".$redirJSON->$redir[0]);
				exit; break;
		}
	}
?>

