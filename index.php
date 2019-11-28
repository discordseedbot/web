<?php

		//Google Analytics
	echo <<<EOF
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146531744-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146531744-1');
</script>	
EOF;


	require(__DIR__.'/backend/redir.php');
	require(__DIR__.'/backend/main.php');
	require(__DIR__.'/backend/ip.php');

	$writeDirectory = "/var/www/dxcdn/log";
    $logFileName = "seedbot.csv";
    $logWriteDestination = $writeDirectory."/".$logFileName;
    $log = fopen($logWriteDestination, a);
    $writeToLogType;
    $writeToLogIP = $_SERVER['REMOTE_ADDR'];
    $writeToLogUserAgent = str_replace(",", " | ", $_SERVER['HTTP_USER_AGENT']);
    $writeToLogHostname = $_SERVER['REMOTE_HOST'];
    $writeToLogCountry = ip_info($_SERVER['REMOTE_ADDR'], "country");
    $writeToLogTime = date('l j \of F Y h;i:s A');
    $writeToLogReferer = $_SERVER['HTTP_REFERER'];



		//Redirects
		
	if(isset($_GET['discord'])) {
		seedRedirect('discord');
		$writeToLogType = "Redirect";
		$destination = "Discord";
	}
	elseif(isset($_GET['invite'])){
		seedRedirect('invite');
		$writeToLogType = "Redirect";
		$destination = "Bot Invite";
	}
	elseif (isset($_GET['patreon'])){
		seedRedirect('patreon');
		$writeToLogType = "Redirect";
		$destination = "Patreon";
	}
	elseif (isset($_GET['roadmap'])){
		seedRedirect('roadmap');
		$writeToLogType = "Redirect";
		$destination = "Roadmap";
	}
	elseif (isset($_GET['docs'])){
		seedRedirect('docs');
		$writeToLogType = "Redirect";
		$destination = "Documentation";
	}
	elseif (isset($_GET['github'])){
		seedRedirect('github');
		$writeToLogType = "Redirect";
		$destination = "Github";
	}
	elseif(isset($_GET['git-stable'])){
		seedRedirect('git-stable');
		$writeToLogType = "Redirect";
		$destination = "Github (Stable)";
	}
	elseif(isset($_GET['git-canary'])){
		seedRedirect('git-canary');
		$writeToLogType = "Redirect";
		$destination = "Github (Canary)";
	}
	elseif(isset($_GET['git-web'])){
		seedRedirect('git-web');
		$writeToLogType = "Redirect";
		$destination = "Github (Web)";
	}
	elseif(isset($_GET['git-botapi'])){
		seedRedirect('git-botapi');
		$writeToLogType = "Redirect";
		$destination = "Github (Bot API)";
	}
	elseif(isset($_GET['status'])){
		seedRedirect('status');
		$writeToLogType = "Redirect";
		$destination = "Status Page";
	}
	elseif(isset($_GET['privacy'])){
		seedRedirect('privacy');
		$writeToLogType = "Redirect";
		$destination = "DARiOX Privacy Policy";
	}

		//Pages

	elseif(isset($_GET['commands'])) {
		echo seedPrintPage('commands');
		$writeToLogType = "Internal Page Redirect";
		$destination = "Commands";
	}
	elseif(isset($_GET['stats'])) {
		echo seedPrintPage('stats');
		$writeToLogType = "Internal Page Redirect";
		$destination = "Bot Stats";
	}
	else {
		echo seedPrintPage('default');
		$writeToLogType = "N/A";
		$destination = "";
	}

$writeToLog = $writeToLogTime.",".$writeToLogIP.",".$writeToLogUserAgent.",".$writeToLogCountry.",".$writeToLogDestination.",".$writeToLogType.",".$writeToLogReferer.",".$writeToLogHostname."\n";

    if (strpos($writeToLogUserAgent, 'CloudFlare-AlwaysOnline') !== true) {
        fwrite($log, $writeToLog);
        fclose($log);
    }
