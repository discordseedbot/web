<?php
	$id = $_GET['a'];
	$perm = $_GET['b'];

	header("Location: https://discordapp.com/oauth2/authorize?client_id=".$id."&scope=bot&permissions=".$perm);
