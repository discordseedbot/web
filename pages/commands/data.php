<?php
  Include '../../backend/bot-info.php';
  Include '../../backend/redir.php';
  Include '../../backend/nav.php';
  $botStatus = seedBotStatusDIV();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<meta name="author" content="DARiOX">
    		<meta name="description" content="The Swiss Army Knife of Discord Bots">
    		<link href="https://cdn.seedbot.xyz/web/css/bootstrap.css" rel="stylesheet" type="text/css" />
    		<link href="https://cdn.seedbot.xyz/web/custom.css" rel="stylesheet" type="text/css" />
    		<title>SeedBot - Commands</title>
        <script>
function redir(redirsk){
  window.location.replace(redirsk);
}
        </script>
	</head>
	<body>
    <?php seedBotGetNav(); ?>

<div class="prefix">
      <code>
s!....|....Default<br>
s?....|....Music<br>
sm!...|....Math<br>
s~....|....Owner<br>
      </code>
    </div>
    <div class="commands">
<h3 id="generic"> Generic Commands </h3>
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
s!stats [request]<br>
<em>Allows the user to get Statistics from the Bot</em><br>
Request: userCount, guildCount, channelCount, botVersion, botBuild, botBuildDate, botBranch, botOwnerID, packageName, botLicense, packageDescription.<br>
<br>
s!screenshare<br>
<em>Allows Screenshare in the Voice Channel you're in. If the icon is not showing for you, use this.</em><br>
<br>
s!userinfo <sup>you can mention a user if you want, idc</sup><br>
<em>Gives some information about yourself or the user you mentioned.</em><br>
<br>
s!serverinfo<br>
<em>Gives some information about the server</em><br>
<br>
s!info<br>
<em>Gives information about the Discord Bot</em><br>
<br>
<br>
<h3 id="mod"> Moderation Commands</h3>
s!kick [mention user to kick, required] [reason, reuqired]<br>
<strong>Requires permission to kick</strong><br>
<br>
s!ban [mention user to ban, required] [reason, required]<br>
<strong>Requires permission to ban</strong><br>
<br>
s!purge [ammount of messages to delete] <sup>In Development</sup><br>
<strong>Requires permission to delete messages</strong><br>
<br>
<br>
<br>
<h3 id="fun"> Fun Commands </h3>
s!rps [rock, paper, or scissors]<br>
<em>Play rock paper scissors with SeedBot</em><br>
<br>
s!punch<br>
<em>Punches someone you don't like</em><br>
<br>
s!avatar [mention user]<br>
<em>Gets your discord avatar or the user you mentioned.</em><br>
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
<h3 id="dmoj"> DMOJ Commands </h3>
s!problem<br>
<em>Loads problem info and a link to the problem</em><br>
<br>
s!search<br>
<em>Searches for a problem</em><br>
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
<h3 id="math"> Math Command </h3>
Supported Equations:<br>
Addition (+), Subtraction (-), Multiplication (*), Division (/ or ÷), Power to (^), Square Root (sqrt), Round (round), Floor (floor), Ceiling (ceiling), Pi (pi), Log (log), Random (rand)<br>
<br>
<br>
<br>
<h3 id="dev"> Developer Commands </h3>
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
s~api [request]<br>
<em>Forces an API Request</em><br>
Request: updateAll, update-userCount, update-guildCount, update-channelCount, update-botVersion, update-botBuild, update-botBuildDate, update-botBranch, update-botOwnerID, update-packageName, update-botLicense, update-packageDescription.<br>
<br>
s~role_list<br>
<em>Lists roles along with their RoleID</em><br>
<br>
s~role_create<br>
Not currently working<br>
<br>
s~role_give<br>
<em>Gives the mentioned user the roleid given<br>
	<code>s~role_give [@mentioned user] [roleid]</code>
</em><br>
<br>
s~spam<br>
<em>Spams a message in the current channel<br>
	<code>s~spam [message count less than 100] [message to spam]</code></em>
<br>
<br>
s~stats<br>
<em>Gives stastics about SeedBot</em><br>
Usage:<br>
<code>
s~stats usercount<br>
s~stats serverlist<br>
s~stats channelcount<br>
</code>
<br>
s~mute [true/false] <@mentioned user><br>
<em>Mutes the mentioned user with the correct boolean (true for muted, false for unmuted)</em><br>
Usage:<br>
<code>s~mute true <@230485481773596672></code> Mutes the mentioned user<br>
<code>s~mute false <@230485481773596672></code> Unmutes the user mentioned</br>
<code>s~mute <@230485481773596672> false</code> Invalid Command, Gives error<br>
<br>
s~defan [true/false] <@mentioned user><br>
<em>Defans the mentioned user with the correct boolean (true for deafened, false for undeafened)</em><br>
Usage:<br>
<code>s~defan true <@230485481773596672></code> Defans the mentioned user<br>
<code>s~defan false <@230485481773596672></code> Undefan the user mentioned</br>
<code>s~defan <@230485481773596672> false</code> Invalid Command, Gives error<br>
<br>
<br>
<br>
<br>
    </div>
<?php echo $botStatus; ?>
	</body>
</html>
