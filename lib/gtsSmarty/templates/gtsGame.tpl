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
    <div class="sb-row genre" id="{$playlist.PlaylistID}">
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
         <input type="text" class="search-query" >
    </div>

    <div class="span4">
        <h4>Song <span class="current_song">6</span> of <span class="total_songs">12</span></h4>
        <div class="progress progress-warning progress-striped active">
          <div class="bar" style="width:50%"></div>
        </div>
    </div>

</div>

<div class="row">

    <div class="span4 offset3">
        <h4>Timer: 12</h4>
        <h4>Points: 100</h4>
    </div>

</div>

<button class='btn btn-large btn-warning pull-right' id="playBtn"><i class="icon-music"></i>PLAY</button>

{/block}


{block name="bottom"}
<div id="player"></div>
{literal}
<script src="../js/grooveshark.js"></script>

{/literal}
{/block}