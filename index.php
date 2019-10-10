<?php

	require(__DIR__.'/pages/functions.php');


		//Redirects
		
	if(isset($_GET['discord'])) {
		seedRedirect('discord');
	}
	elseif(isset($_GET['invite'])){
		seedRedirect('invite');
	}
	elseif (isset($_GET['patreon'])){
		seedRedirect('patreon');
	}
	elseif (isset($_GET['roadmap'])){
		seedRedirect('roadmap');
	}
	elseif (isset($_GET['docs'])){
		seedRedirect('docs');
	}
	elseif (isset($_GET['github'])) {
		if($_GET['github'] === "stable"){
			seedRedirect('git-stable');
		}
		elseif($_GET['github'] === "canary"){
			seedRedirect('git-canary');
		}
		elseif($_GET['github'] === "web"){
			seedRedirect('git-web');
		}
		elseif($_GET['github'] === "bot-api"){
			seedRedirect('git-botapi');
		} else {
			seedRedirect('github');
		}
	}

		//Pages

	elseif(isset($_GET['commands'])) {
		echo seedPrintPage('commands');
	}
	elseif(isset($_GET['stats'])) {
		echo seedPrintPage('stats');
	}
	else {
		echo seedPrintPage('default');
	}