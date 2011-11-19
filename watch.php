<?php 
//Set Page and Include Header
$page = 3; require_once('header.php'); 
//Get YouTube Video Id
$video = $_GET['video'];
?>
<div class="video-area">
	<iframe title="YouTube video player" width="768" height="468" src="http://www.youtube.com/embed/<?php echo $video; ?>?hd=1&autoplay=1" frameborder="0" allowfullscreen></iframe>
	<div class="center" style="display: none;">
		<p class="dbutton"><a href="watch?video=SDaLjTRWA-s">Download Video</a></p>	
		<p class="dbutton"><a href="watch?video=SDaLjTRWA-s">Download .Blend</a></p>	
	</div>
</div>
<?php require_once('footer.php'); ?>