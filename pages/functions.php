<?php
	function seedGenFrame($page) {
		$genFrame = `<iframe height="100%" width="100%" src="`.$page.`">`;
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
?>