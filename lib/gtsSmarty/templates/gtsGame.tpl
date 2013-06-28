{extends file="base.tpl"}

{block name="head"}
{literal}
<script src="../swfobject/src/swfobject.js"></script>
<script>
console.log(swfobject);
    swfobject.embedSWF("http://grooveshark.com/APIPlayer.swf", "player", "0", "0", "9.0.0", "", {}, {allowScriptAccess: "always"}, {id:"groovesharkPlayer", name:"groovesharkPlayer"}, function(e) {
        console.log(e);
        var element = e.ref;

        if (element) {
            console.log("YAY")
            setTimeout(function() {
                window.player = element;
                window.player.setVolume(99);
            }, 1500);
        } else {
            console.log("BAD");
        }

    });
</script>
{/literal}
{/block}

{block name="sidebar"}
{if isset($genres)}
{foreach from=$genres key=id item=genre}
<li>
    <div class="sb-row genre" id="{$id}">
        <h4>{$genre}</h4>
    </div>
</li>
{/foreach}
{/if}
{if isset($playlists)}
{foreach from=$playlists key=id item=playlist}
<li>
    <div class="sb-row genre playlist" id="{$playlist.PlaylistID}">
        <h4>{$playlist.PlaylistName}</h4>
    </div>
</li>
{/foreach}
{/if}
{/block}

{block name="gameScreen"}
<div class="row">
    <div class="span3">
        <h4>Guess!</h4>
         <input type="text" class="search-query" id="search-bar" >
    </div>

    <div class="span4">
        <h4>Song <span id="current-song">0</span> of <span id="total-songs">0</span></h4>
        <div class="progress progress-warning progress-striped active">
          <div class="bar" id="progress-bar" style="width:0%"></div>
        </div>
    </div>

</div>

<div class="row">
    <div class="span3">

        <div id="score-div">
           <h4>Your Score: <span class="score">0</span></h4>
           <small id="comment">Comment</small>
        </div>

    </div>
    <div class="span4">
        <h4>Timer: <span id="timer">0</span></h4>
        <h4>Points: <span class="score">0</span></h4>
    </div>

</div>

<button class='btn btn-large btn-warning pull-right' id="playBtn"><i class="icon-music"></i>PLAY</button>

{/block}


{block name="bottom"}
<div id="player"></div>
{literal}
<script src="../js/underscore.js"></script>
<script src="../js/gs.js"></script>


{/literal}
{/block}