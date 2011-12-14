<?php
// Relevant Documentation:
// http://framework.zend.com/manual/en/zend.gdata.youtube.html
// http://www.tig12.net/downloads/apidocs/zf/Gdata/Zend_Gdata_YouTube.class.html
// http://www.tig12.net/downloads/apidocs/zf/Gdata/YouTube/Zend_Gdata_YouTube_VideoEntry.class.html
// http://www.phpriot.com/articles/embedding-videos-with-zend-gdata-youtube/3

// Pull in the Zend Framework
require_once('zend/Gdata/YouTube.php');
 
// Create new Youtube object
$yt = new Zend_Gdata_YouTube();

// Set feed urls
$blend25 = 'http://gdata.youtube.com/feeds/api/playlists/13FCE5A9EF9026CE';
$blend24 = 'http://gdata.youtube.com/feeds/api/playlists/F4FED3F5A7A48AA1';
$blendRPG = 'http://gdata.youtube.com/feeds/api/playlists/B9DF8EE7EB06003A';

if($setURL == 1)
	$feedURL = $blend25;
else if($setURL == 2)
	$feedURL = $blend24;

// Attempt to set $feed to a Zend_Gdata_YouTube_VideoEntry instance
try {
    $feed = $yt->getPlaylistVideoFeed($feedURL);
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit;
}

// Counter Var
$counter = 1;

// Print out $feed list
foreach ($feed as $video) {
	// Get Youtube URL
    $url = $video->getVideoWatchPageUrl();
    
    // Find The ID
	$start = strpos($url, '=') + 1;
	$url = substr($url, $start);
	$end = strpos($url, '&');
	$url = substr($url, 0, $end);
	$id = $url;
    
    // Get Youtube Title
    $title = $video->getVideoTitle();
    
    // Find Real Title
    $start = strpos($title, '(') + 1;
    $title = substr($title, $start);
    $end = strpos($title, '-');
    $title = substr($title, 0, $end);
    
    // If That Didn't Work Try Something Different 
    if( $title == "" ) {
    	$title = $video->getVideoTitle();
    	$start = strpos($title, '(') + 1;
	    $title = substr($title, $start);
	    $end = strpos($title, ')');
	    $title = substr($title, 0, $end);
    }
    
    // Hack For First 3 2.4 Tutorial Vids
	if( $title == "" ) 
		$title = "Basics";
    else if ( $title == "part 1" ) 
    	$title = "Basics - Part 1";
    else if ( $title == "part 2" )
    	$title = "Basics - Part 2";
    
    // Set More Vars
    $views = number_format($video->getVideoViewCount());
    $length = intval($video->getVideoDuration()/60)." minutes";
    
    // Print All That Good Stuff
    echo "<tr>";
    echo "<td>".$counter++."</td>";
    echo "<td>".$title."</td>";
    echo "<td>".$length."</td>";
    echo "<td>".$views."</td>";
    echo "<td><a class=\"btn\" href=\"#current\" onclick=\"changeIt('$id')\">Watch Now</a></td>";
    echo "</tr>";
}
?>