{extends file="base.tpl"}
{block name="css"}
<link rel="stylesheet" type="text/css" href="gtsLogin.css">
{/block}

{block name="sidebar"}
{* For each row to display *}
<div class="sb-row">
    <h4>Title</h4>
    <small>Description or List of songs...</small>
</div>

{* /foreach *}
{/block}

{block name="gameScreen"}

<form action="" method="POST" class="form-horizontal">
    <div class="control-group">
        <label class="control-label" for="un">Email</label>
        <div class="controls">
            <input id="un" name="un" type="text" placeholder="Username or Email">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="pw">Grooveshark Password</label>
        <div class="controls">
            <input id="pw" name="pw" type="password" placeholder="Grooveshark Password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <input type="submit" class="btn btn-primary" value="Login with Grooveshark">
        </div>
    </div>
</form>


{/block}