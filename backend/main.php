<?php
	function seedGenFrame($page) {
		$genFrame = `<iframe height="100%" width="100%" src="`.$page.`">`;
	}
	function seedPrintPage($page) {
		switch ($page) {
			case 'commands':
				return file_get_contents(substr(__DIR__,0,-8).'/pages/commands/index.html');
				break;
			case 'stats':
				return file_get_contents(substr(__DIR__,0,-8).'/pages/stats/index.html');
				break;
			case 'default':
				return file_get_contents(substr(__DIR__,0,-8).'/pages/default/index.html');
				break;
		}
	}

	function seedGetLink($linkreq){
		$redirJSON = json_decode(file_get_contents(__DIR__."./redir.json"));
		return $redirJSON->$linkreq[0];
	}
?>