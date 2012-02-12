<?php $page = 4; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Zombie Factory</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	<div>
	  <h2>About</h2>
	      <ul class="media-grid">
		  	<li><a><img class="thumbnail" src="img/template/zombie-factory.png" alt="zombiefactory"></a></li>
		  </ul>
	      <p>
	      	Zombie Factory is a simple zombie shooting game written with <a href="http://pygame.org">PyGame</a>, a 
	      	cross-platform set of Python modules designed for writing video games. Initially designed as game test,
	      	the project has evolved into a fun to a fun zombie shooter. It is still in its very early stages of 
	      	development, but I will keep updating this page, and the development log as work continues.  
      	 </p>
	      <p>
	      	<a class="btn" href="https://github.com/super3/Zombie-Factory/zipball/master">Download</a>
	      	<a class="btn" href="https://github.com/super3/Zombie-Factory">Source Code (Github)</a>
          </p>
	  <h2>Dev Log #1</h2>
		 <p>
		 	<p class="italic">December 13, 2011<p>
		 	Zombie Factory art is all created in the digital art form called
		 	<a href="http://http://en.wikipedia.org/wiki/Pixel_art">pixel art</a>. It is reminicent of the type of 
		 	art used in the early consoles, and the handheld game devices (like the GameBoy) of the 90s. Apart from 
		 	that is a really easy and fun art style that I felt was more suited for me (as I am more of a programmer
		 	than a graphic artist. <br/><br/>
		 	
		 	I had been looking around for some simple pixel art for the characters for a while. Much of the pixel art
		 	that people are making today come in two styles, retro and isometric. Retro uses more of the small limited
		 	color scheme of early consoles. The isometric style is a kind of 3D pixel art. You can see examples of each 
		 	below. 
		 	<div class="row">
			 	<div class="span8"> 	
				  <ul class="media-grid">
				  	<li><a href="http://www.flickr.com/photos/david994a/5455466752/">
				  		<img src="img/dev-log/retro-pixelart.png" alt="pixelart"></a></li>
				  </ul>
			 	</div>
			 	<div class="span8"> 	
				  <ul class="media-grid">
				  	<li><a href="http://www.flickr.com/photos/sabrinaeras/2065863328/">
				  		<img src="img/dev-log/iso-pixelart.png" alt="pixelart"></a></li>
				  </ul>
			 	</div>
		 	</div>
			On the left is the retro pixel art, and on the right is the isometric pixel art. Retro pixel art is pretty
			cool, but it was not the kind I was looking for. Isometric pixel art is amazing, and the colors are always 
			pretty vibrant, and awesome. There is only one problem with isometric pixel art. It is near impossible to
			program with. Don't belive me? Why don't you take a look at this wikipedia article on 
			<a href="http://en.wikipedia.org/wiki/Isometric_projection">isometric projection</a> and see if you 
			understand any of it. <br/><br/>
			
			Finally after months of "research" I found the perfect game that is 2D but uses
			really awesome colors like found in isometric pixel art. The game is called Dude and Zombies, and you can 
			play it <a href="http://armorgames.com/play/12095/dude-and-zombies">here</a> if you want. If you play the 
			game you can see the main characters from Dude and Zombies is the base for the characters in Zombie 
			Factory. Follow the base, it is pretty easy to make any type of pixel art characters, and I actually might 
			do a tutorial on this at some point. Here are just some of the sprites I have put togethere so far as tests:
			<div class="row">	
				  <ul class="media-grid" style="padding-left: 350px;">
				  	<img src="img/dev-log/zombie.gif" alt="pixelart">
				  	<img src="img/dev-log/police-fire.gif" alt="pixelart">
				  	<img src="img/dev-log/police-reload.gif" alt="pixelart">
				    <img src="img/dev-log/chant.gif" alt="pixelart">
				  </ul>
			</div><br/>
		 	I still have a bunch of work to do on the art, and I will update you as I do!
	 	 </p>
	</div>
</div>
<?php require_once('footer.php'); ?>