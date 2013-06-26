{extends file="base.tpl"}

{block name="head"}
<!-- <link rel="stylesheet" type="text/css" href="../gtsLogin.css"> -->
{/block}

{block name="sidebar"}
{foreach from=$genres key=id item=genre}
<li>
    <div class="sb-row genre" id="{$id}">
        <h4>{$genre}</h4>
    </div>
</li>
{/foreach}
{/block}

{block name="gameScreen"}

<form action="" method="POST">
    <h4>Username:</h4>
    <input class="input" type="text" name="un" required>
    <h4>Password:</h4>
    <input class="input" type="password" name="pw" required>
    <input type="submit" class="btn">
</form>


{/block}

{block name="message"}
{if isset($error_message)}
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> {$error_message}
</div>
{/if}
{/block}