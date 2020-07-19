<?php


	function pageHandle ($pageToGet) {
		switch ($pageToGet) {
			case "commands":
			case "home":
				return file_get_contents(__DIR__."/pages/".$pageToGet.".html");
				break;
			case "statistics":
				require_once(__DIR__."/pages/statistics.php");
				echo statsPage();
				return "<!-- stats -->";
				break;
			default:
				require_once(__DIR__."/redirectHandle.php");
				return redirectHandle($pageToGet);
				break;
		}
	}

	function printError($errorToPrint) {
		$alertJSON = json_decode(file_get_contents(__DIR__.'/alerts.json'),true);

		foreach($alertJSON as $d){
			//echo $d['name'].' % '.$d['type'].' % '.$d['content']."\n";
			if ($errorToPrint === $d['name']) {
				return '<div class="alert alert-'.$d['type'].'">'.$d['content'].'</div>';
			}
		}
	}
