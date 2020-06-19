<?php
	$id = $_GET['a'];
	$perm = $_GET['b'];

	if(ISSET($_GET['br'])) {
		switch($_GET['br']) {
			case "stable":
				$id = 423432378640498688;
				break;
			case "canary":
				$id = 603130851303096350;
				break;
		}
	}

	header("Location: https://discordapp.com/oauth2/authorize?client_id=".$id."&scope=bot&permissions=".$perm);
