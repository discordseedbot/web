<?php
  Include '../../backend/bot-info.php';
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
    <link href="https://cdn.seedbot.xyz/web/fa/css/all.css" rel="stylesheet"> 
    <title>SeedBot</title>
        <script>
function redir(redirsk){
  window.location.replace(redirsk);
}
        </script>
  </head>
  <body>
<?php seedBotGetNav(); ?>
    <div class="custom-content">
      <div class="title">
        <h1>Welcome to the home of SeedBot</h1><br>
        <h2><sup>stay as long as you like!</sup></h2>
      </div>
      <div class="custom-content-bot-con">
        <div class="custom-description">
          <h3>What is SeedBot</h3>
          <p>SeedBot is a Discord Bot for programmers <strong>by</strong> programmers. This is mainly due to the DMOJ Module that the <a href="https://github.com/finchiedev">Amazing FinchieDev</a> developed. Other than the DMOJ Module there are other things in the bot such as, music, fun commands, and moderation bot. Our goal is to make the knockoff but good swiss-army knife of discord bots. If you want to see our wide range of commands then <a href="#commands">click here</a>. Oh and its open source.
        </div>
        <img src="https://cdn.seedbot.xyz/web/logo-min.png" class="logo" height="400px">
      </div>
    </div>
    <!--div class="footer">
      <div class="copyright">
        Copyright &copy; 2018-2019 <a href="https://dariox.club">DARiOX</a>
      </div>
    </div-->
  </body>
</html>
    <?php echo $botStatus; ?>
