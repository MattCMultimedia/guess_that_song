<?php

require("GroovesharkAPI-PHP/gsAPI.php");
session_start();
$gsapi = new gsAPI('gs_mattcondon', '94d69e01a378fabc0520a0583719f090');
if (isset($_SESSION['gsSession'])) {
    $gsapi->setSession($_SESSION['gsSession']);
} else {
    $_SESSION['gsSession'] = $gsapi->startSession();
}
$gsapi->getCountry($_SERVER['REMOTE_ADDR']);

require("GroovesharkAPI-PHP/gsPlaylist.php");

// create new playlist
$gsPlaylist = new gsPlaylist();
$gsPlaylist->setPlaylistID($_POST['playlistID']);
// get the info
$playlistInfo = $gsPlaylist->getPlaylistInfo($gsPlaylist->getPlaylistID());
// then let it populate itself
$gsPlaylist->importPlaylistData($playlistInfo);
$songs = $gsPlaylist->getSongs();
// return songs
echo json_encode($songs);

?>