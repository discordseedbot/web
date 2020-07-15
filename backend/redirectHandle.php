<?php
	function redirectHandle($redirectPage) {
		$redirJSON = json_decode(file_get_contents(__DIR__."/redirect.json"),true);

		$final;$found = false;
		foreach($redirJSON as $d) {
			if ($redirectPage === $d['name']) {
				$final = printError("redirect");
				sleep(3);
				header("Location: ".$d['link']);
				$found = true;
			}
		}
		if ($found === false) {
			$final = printError("invalidPage");
		}
		return $final;
	}
