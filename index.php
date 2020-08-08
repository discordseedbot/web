<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>SeedBot Base</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/spinkit.min.css" rel="stylesheet" type="text/css" />
		<style>
			:root{
				--sk-color:white;
				--sk-size: 100px;
			}
			#loading{width:100%;height:100%;top:0;left:0;position:fixed;display:block;opacity:.9;background-color:#000;z-index:99;text-align:center}#loading-image{position:absolute;top:100px;left:240px;z-index:100}
			.sk-wave{
				position:absolute;
				top:calc(50% - 50px);
				left: calc(50% - 50px);
			}
		</style>
	</head>
	<body>
		<div id="loading">
			<div class="sk-wave">
				<div class="sk-wave-rect"></div>
				<div class="sk-wave-rect"></div>
				<div class="sk-wave-rect"></div>
				<div class="sk-wave-rect"></div>
				<div class="sk-wave-rect"></div>
			</div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="?p=home">SeedBot</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="?p=home">Home</a></li>
							<li><a href="?p=commands">Commands</a></li>
							<li><a href="?p=invite">Invite</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Other Goodies <b class="caret"></b></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="?p=github">Github</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="?p=donate">Donate</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="?p=twitter">Twitter</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="?p=roadmap">Project Roadmap</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="?p=statistics">Bot Statistics</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="https://seedbot.statuspal.io/">Status Page</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="https://dariox.club/privacy.html">Privacy Policy</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 55px; padding:9px 0;">
			<div class="row">
				<!-- start custom content -->


<?php
	$maintence = false;

	print_r($maintence);

	if ($maintence) {
		echo "website is being worked on, be fuckin' paitent";
	} else {
		require_once(__DIR__.'/backend/init.php');

		if (!ISSET($_GET['p'])) {
			echo pageHandle("home");
		} else {
			echo pageHandle($_GET['p']);
		}
	}
?>


				<!-- end custom content -->
			</div>
			<hr>
			<footer>
				<p>&copy; 2018-2020 <a href="https://github.com/discordseedbot">SeedBot Contributers</a></p>
				<p>&copy; 2019-2020 <a href="https://dariox.club">DARiOX</a></p>
			</footer>
		</div>


		<script src="jquery-3.5.1.min.js" type="text/javascript"></script>
		<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script>
$(document).ready(function() {
	setTimeout(function() {
		$('#loading').fadeOut();
	},200)
});
		</script>
	</body>
</html>
