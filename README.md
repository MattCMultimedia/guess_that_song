Guess That Song
====================

Song-guessing game using Grooveshark's api.

**Note to contributors: For these php files to work, they need config.php included. Please make sure that it is created and excluded from git by placing "config.php" in your .gitignore.**

Documentation
----------------

<dl>
    <dt>getPlaylistIDs.php</dt>
    <dd>Accepts a POSTED 'playlistID', acquired from getUserPlaylists.php. Returns a json_encoded array of Song objects.</dd>
    <dt>getSearchResults.php</dt>
    <dd>Accepts a song title as a search parameter. Title only for now. Returns a json_encoded array of matching Song objects.</dd>
    <dt>getUserPlaylists.php</dt>
    <dd>Returns a json_encoded array of a user's playlists, assuming they are logged in already.</dd>
    <dt>logInUser.php</dt>
    <dd>Accepts POSTED password and username as 'pw' and 'un'</dd>
</dl>
