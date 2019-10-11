<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<meta name="author" content="DARiOX">
    		<meta name="description" content="The Swiss Army Knife of Discord Bots">
    		<link href="https://cdn.seedbot.xyz/web/css/bootstrap.css" rel="stylesheet" type="text/css" />
    		<link href="https://cdn.seedbot.xyz/web/css/custom.css" rel="stylesheet" type="text/css" />
    		<title>SeedBot - Commands</title>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom:1px #666666 dotted;">
      <a class="navbar-brand" href="" onclick="alert('piss off cunt')">SeedBot</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://seedbot.xyz">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://seedbot.xyz?github">Github</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://seedbot.xyz?commands">Commands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://seedbot.xyz?discord">
              <img src="https://cdn.seedbot.xyz/web/discord-logo.svg" height="20px" style="margin-top:3.5px;" fill="#808080"/>
            </a>
          <li class="nav-item">
            <a class="nav-link" href="https://seedbot.xyz?patreon"><img src="https://cdn.seedbot.xyz/web/patreon.svg" height="20px" stroke="#808080"> Patreon</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="https://seedbot.xyz?invite">Invite Me!</a>
        </span>
      </div>
    </nav>

<div class="prefix">
      <code>
s!....|....Default<br>
s?....|....Music<br>
sm!...|....Math<br>
s~....|....Owner<br>
      </code>
    </div>
    <div class="commands">
<h3> Generic Commands </h3>
s!ping<br>
<em>Sends a message with the bot response time, meausred in milliseconds. (ms)</em><br>
<br>
s!invite<br>
<em>Sends a link to invite the bot a server.</em><br>
<br>
s!support<br>
<em>Sends a link to the support discord and a support email address.</em><br>
<br>
s!help<br>
<em>Gives you a link to this page.</em><br>
<br>
s!patreon<br>
<em><a href="https://seedbot.xyz/?patreon">Returns info on how donating on patreon helps me.</a></em><br>
<br>
s!roadmap<br>
<em>Gives you a link to the <a href="https://seedbot.xyz?roadmap">Offical SeedBot Trello Roadmap</a></em><br>
<br>
s!guide<br>
<em>Gives you a link to the <a href="https://docs.seedbot.xyz">Offical SeedBot GitBook Page</a></em><br>
<br>
<br>
<h3> Moderation Commands <sup>All Disabled</sup></h3>
s!kick [mention user to kick, required] [reason, reuqired]<br>
<strong>Requires permission to kick</strong><br>
<br>
s!ban [mention user to ban, required] [reason, required]<br>
<strong>Requires permission to ban</strong><br>
<br>
s!purge [ammount of messages to delete]<br>
<strong>Requires permission to delete messages</strong><br>
<br>
<br>
<br>
<h3> Fun Commands </h3>
s!rps [rock, paper, or scissors] <sup>(Disabled)</sup><br>
<em>Play rock paper scissors with SeedBot</em><br>
<br>
s!punch<br>
<em>Punches someone you don't like</em><br>
<br>
s!avatar [mention user]<br>
<em>Gets your discord avatar or the user you mentioned.</em><br>
<br>
s!hammer [mention user]<br>
<em>Hits them with a hammer</em><br>
<br>
s!magic8ball<br>
<em>Predicts your future, now with mind reading!</em><br>
<br>
s!asciify<br>
<em>Makes your text look like it just came out of a BBS!</em><br>
<br>
s!ppsize<br>
<em>See how big your pea is!</em><br>
<br>
s!copypasta<br>
<em>Randomly picks a copypasta out of our library!</em><br>
<br>
<br>
<br>
<h3> DMOJ Commands </h3>
s!problem<br>
<em>Loads problem info and a link to the problem</em><br>
<br>
s!search<br>
<em>Searches for a problem<br>
<br>
s!contest<br>
<em>Loads content data and a link to the contest</em><br>
<br>
s!content-search<br>
<em>Searches for a contest that has a similar name</em><br>
<br>
s!user<br>
<em>Loads information about the user and a link to the user</em><br>
<br>
s!user-search<br>
<em>Searches for a user with a similar name and loads information about the user.</em><br>
<br>
<br>
<br>
<h3> Math Command </h3>
Supported Equations:<br>
Addition (+), Subtraction (-), Multiplication (*), Division (/ or ÷), Power to (^), Square Root (sqrt), Round (round), Floor (floor), Ceiling (ceiling), Pi (pi), Log (log), Random (rand)<br>
<br>
<br>
<br>
<h3> Developer Commands </h3>
s~getip<br>
<em>Returns public IP address provided by ISP.</em><br>
<br>
s~announce [message] <sup>Disabled</sup><br>
<em>Puts message in every channel the bot can access.</em><br>
<br>
s~channelsend [channelID] [message]<br>
<em>Posts message to the channelID specifiyed</em><br>
<br>
s~stats [serverlist, usercount, channelcount]<br>
<em>Returns stastics for the specifiyed type.</em><br>
<br>
s~eval [Node.JS command to execute]<br>
<em>Executes the node.js command specifiyed.</em><br>
<br>
s~restart<br>
<em>Restarts discord bot.</em><br>
<br>
s~rpc [content] <sup>the content can be, reset, refresh, or a message</sup><br>
<em>Resets, Refreshes, or sets the Rich Presence message</em><br>
<br>
s~shell [*nix shell command]<br>
<em>Executes shell command with whatever user the bot is running under</em><br>
<br>
s~createinvitefromid [server/guild id]<br>
<em>Creates Invite from the server/guild ID specifiyed</em><br>
<br>
s~getallserverinvite<br>
<em>Gets invite links from all servers/guilds SeedBot is in</em><br>
<br>
<br>
<br>
<br>
    </div>

	</body>
</html>
