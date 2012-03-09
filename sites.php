<?php $page = 2; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Sites</h1>
</div>

<!-- Row of columns -->
<div class="row">
	<div class="span12">
		<h2>A Little About Development</h2>
		<p>
			Below is a collection of my websites that are currently live. All are built using
			HTML, CSS, PHP, and MySQL. More recently I have been redesigning them using HTML5,
			and an awesome HTML, CSS, and Javascript framework called
			<a href="http://twitter.github.com/bootstrap/">Boostrap</a>. In fact, the site you 
			are viewing now was built with Bootstrap. I am currently playing around with more 
			development using Bootstrap, and hope to release a starter template set for those
			who use Bootstrap too. If you have an ideas for starter templates or would like
			to help, feel free to <a href="/contact">contact me</a>.
	</div>
	<div class="span6">
		<h2>WildPHP</h2>              
		<?php thumbnail("span6", "http://wildphp.com", "img/template/wildphp-screen.png"); ?>
		<div class="caption">
			<h5>Info</h5>
			<p>
				Focuses on the WildPHP IRC Bot, a free, open-source, and customizable IRC
				Bot. This bot was developed in PHP5 using sockets. Also includes several 
				free PHP scripts and tutorials. 
			</p>
			
		</div>
		<a class="btn" href="http://wildphp.com">Visit &raquo;</a>
	</div>
	<div class="span6">
		<h2>Nystic</h2>
		<?php thumbnail("span6", "http://forum.nystic.com", "img/template/nystic-screen.png"); ?>
		<div class="caption">
			<h5>Info</h5>
			<p>
				An online community for <a href="http://blender.org/">Blender</a>, an open
				source, cross platform suite of tools for 3D creation. With over 1,000 active members 
				and 100,000 posts it serves as a resource for new and experienced Blender users.
			</p>
			
		</div>
		<a class="btn" href="http://forum.nystic.com">Visit &raquo;</a>
	</div>
</div>
<?php require_once('footer.php'); ?>