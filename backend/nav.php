<?php
	function seedBotGetNav(){
		$nav = file_get_contents("../../backend/data/nav.html");
		echo $nav;
	}
?>
