console.log("It works?")

$(document.body).ready($(function(){

        var botVersion = $.get("http://api.seedbot.xyz?req=botVersion", function(data, status){return data;});
        var botBuild = $.get("http://api.seedbot.xyz?req=botBuild", function(data, status){return data;});
        var userCount = $.get("http://api.seedbot.xyz?req=userCount", function(data, status){return data;});
        var channelCount = $.get("http://api.seedbot.xyz?req=channelCount", function(data, status){return data;});

    if (botVersion.length  < 1) {
        document.getElementById("statusthingie").innerHTML = `
            <img class="check" src="check.svg" height="40px"/>
            <div class="status online">
                <div class="status title">
                    SeedBot is Online!
                </div><br>
                <div class="status desc">
                    SeedBot should be working fine, if it isn't please join <a href="https://seedbot.xyz?discord">my discord.</a>
                </div>
            </div>
        `;

        




    } else {

        document.getElementById("statusthingie").innerHTML = `
            <img class="check" src="check.svg" height="40px"/>
            <div class="status online">
                <div class="status title">
                    SeedBot is Offline
                </div><br>
                <div class="status desc">
                    SeedBot is offline, please check our <a href="https://seedbot.xyz?discord">discord server</a> or check our <a href="http://status.dariox.club">status page</a> or my <a href="https://jyles.club?page=twitter">twitter</a>.
                </div>
            </div>
        `;

    document.getElementById("botVersion").innerText = "N/A"
    document.getElementById("botBuild").innerText = "N/A"
    document.getElementById("userCount").innerText = "N/A"
    document.getElementById("channelCount").innerText = "N/A"

    }
}));