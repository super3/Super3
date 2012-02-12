<?php $page = 0; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<!-- Social icons from http://dryicons.com -->
	<a href="http://www.youtube.com/user/super3boy"><img src="img/template/youtube.png" alt="youtube" class="right social"/></a>
	<a href="http://twitter.com/super3"><img src="img/template/twitter.png" alt="twitter" class="right social"></a>
	<a href="http://www.reddit.com/user/super3"><img src="img/template/reddit.png" alt="reddit" class="right social"></a>
	<h1>About</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	  <h2>About Me</h2>
                  <?php thumbnail("span12", "#", "img/template/me.png"); ?>
	  	  <p>
	  	  	My name is Shawn Wilkinson, and I'm an artist, web designer, developer, and teacher. I am currently a sophomore at 
	  	  	<a href="http://www.morehouse.edu/">Morehouse College</a>, majoring in Computer Science, and minoring in Business. On this website you will
	  	  	find my many different projects that I have worked on over the years. I hope you will enjoy it, and take some free
	  	  	stuff before you go!
	  	  </p>
	  <h2>Free Wallpaper</h2>
                <?php thumbnail("span12", "#", "img/template/wallthumb.png"); ?>
		  <p>
		  	<a class="btn" href="img/template/wallpaper.png">Download 1920x1080</a>	
		  	<a class="btn" href="img/template/wallpaper3.png">Download 1280x800</a>	
		  	<a class="btn" href="img/template/wallpaper2.png">Download 1024x768</a>	
	  	  </p>
</div>
<?php require_once('footer.php'); ?>