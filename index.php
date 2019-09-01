<?php
  $users = file_get_contents('http://seedbot.dxcdn.net/users.txt');
  $channels = file_get_contents('http://seedbot.dxcdn.net/channels.txt');
  $guilds = file_get_contents('http://seedbot.dxcdn.net/guilds.txt');
  $botversion = file_get_contents('http://seedbot.dxcdn.net/version.txt');
  $botStatus;

  if (strlen($users) > 1) {
    $botStatus = <<<EOF
<h3 class="status online">Online</h3>
EOF;
  } else {
    $botStatus = <<<EOF
<h3 class="status offline">Offline</h3><br>
<p>SeedBot is Offline! Check <a href="http://jyles.club/redirect.php?page=twitter">my twitter</a> to check the status of the bot. Or check the <em>Offical</em> <a href="http://status.dariox.club">DARiOX Status Page</a>.
EOF;
  }

?>
<!DOCTYPE html, php7.2>
<html>
  <head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="fa/css/all.css" rel="stylesheet"> 
    <title>SeedBot | Offical Website</title>
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
            <a class="nav-link" href="http://seedbot.jyles.club">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/discordseedbot">Github</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#commands">Commands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://seedbot.jyles.club/discord">
<img src="Discord-Wordmark-Black.svg" height="20px" style="margin-top:3.5px;" fill="#808080"/>
            </a>
          <li class="nav-item">
            <a class="nav-link" href="https://patreon.com/jyles_coadward"><i class="fab fa-patreon"></i> Patreon</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="http://seedbot.jyles.club/invite">Invite Me!</a>
        </span>
      </div>
    </nav>
    <div class="custom-content">
      <div class="title">
        <h1>Welcome to SeedBots Home</h1><br>
        <h2><sup>stay as long as you like!</sup></h2>
      </div>
      <div class="custom-content-bot-con">
        <div class="custom-description">
          <h3>What is SeedBot</h3>
          <p>SeedBot is a Discord Bot for programmers <strong>by</strong> programmers. This is mainly due to the DMOJ Module that the <a href="https://github.com/finchiedev">Amazing FinchieDev</a> developed. Other than the DMOJ Module there are other things in the bot such as, music, fun commands, and moderation bot. Our goal is to make the knockoff but good swiss-army knife of discord bots. If you want to see our wide range of commands then <a href="#commands">click here</a>. Oh and its open source.
        </div>
        <img src="https://storage.googleapis.com/file-asia/cdn/seedbot/logo.png" class="logo" height="400px">
      </div>
    </div>
    <br><br><br>
    <div class="custom-seperator"></div>
    <br><br><br>
    <div class="stastics">
      <h3>Bot Stastics</h3>
<table>
  <tr>
    <th>Users</th>
    <th>Channels</th>
    <th>Server</th>
    <th>Bot Version</th>
  </tr>
  <tr>
    <td><?php echo $users; ?></td>
    <td><?php echo $channels; ?></td>
    <td><?php echo $guilds; ?></td>
    <td><?php echo $botversion; ?></td>
  </tr>
</table>
<?php echo $botStatus; ?>
    </div>
    <div class="prefix">
      <code>
s!....|....Default<br>
s?....|....Music<br>
sm!...|....Math<br>
s~....|....Owner<br>
      </code>
    </div>
    <div class="custom-seperator" id="commands"></div>
    <br><br><br>
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
<em><a href="https://patreon.com/jyles_coadward">Returns info on how donating on patreon helps me.</a></em><br>
<br>
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
    <div class="footer">
      <div class="copyright">
        Copyright &copy; 2018-2019 <a href="http://dariox.club">DARiOX</a> and <a href="http://jyles.club">Jyles Coad-Ward</a>
      </div>
    </div>
  </body>
</html>
