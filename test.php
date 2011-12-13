<?php
// Pull in the Zend Framework
require_once('zend/Gdata/YouTube.php');
 
// Create new Youtube object and set user
$user = 'super3boy';
$yt = new Zend_Gdata_YouTube();

// Get all the user's playlists
$playlistListFeed = $yt->getPlaylistListFeed($user);

// Loop through playlists
foreach ($playlistListFeed as $playlistEntry) {
    echo $playlistEntry->title->text . "<br/>";
    echo $playlistEntry->getPlaylistVideoFeedUrl() . "<br/><br/>";
}
?>