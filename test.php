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

// Attempt to set $feed to a Zend_Gdata_YouTube_VideoEntry instance
try {
    $feed = $yt->getPlaylistVideoFeed($blend25);
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit;
}

// Print out $feed list
foreach ($feed as $video) {
    echo "ID: ".$video->getVideoWatchPageUrl()."<br/>";
    echo "Title: ".$video->getVideoTitle()."<br/>";
    echo "Views: ".number_format($video->getVideoViewCount())."<br/>";
    echo "Duration: ".intval($video->getVideoDuration()/60)." minutes<br/>";
    // Output One Thumbnail
    foreach ($video->getVideoThumbnails() as $thumbnail) { ?>
	         <img src="<?php echo htmlSpecialChars($thumbnail['url']) ?>"
	         width="400"
	         height="<?php echo htmlSpecialChars($thumbnail['height']) ?>"
	         alt="<?php echo htmlSpecialChars($thumbnail['time']) ?>" /><br/><br/>";"
<?php
	break;  
   } 
}
?>