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
	elseif (isset($_GET['github'])){
		seedRedirect('github');
	}
	elseif(isset($_GET['git-stable'])){
		seedRedirect('git-stable');
	}
	elseif(isset($_GET['git-canary'])){
		seedRedirect('git-canary');
	}
	elseif(isset($_GET['git-web'])){
		seedRedirect('git-web');
	}
	elseif(isset($_GET['git-botapi'])){
		seedRedirect('git-botapi');
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
