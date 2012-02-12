<?php $page = 3; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Tutorials</h1>
</div>

<!-- Row of columns -->
<div class="row show-grid">
	<div class="span6">
	  <h2>Blender 2.5</h2>
           <?php thumbnail("span6", "blender25", "img/template/blender25.png"); ?>
	   <p><a class="btn" href="blender25">View &raquo;</a></p>
	</div>
	<div class="span6">
	  <h2>Blender 2.4</h2>
           <?php thumbnail("span6", "blender24", "img/template/blender24.png"); ?>
	   <p><a class="btn" href="blender24">View &raquo;</a></p>
	</div>
	<div class="span6">
	  <h2>PHP</h2>
           <?php thumbnail("span6", "http://wildphp.com", "img/template/php.png"); ?>
	   <p><a class="btn" href="http://wildphp.com">Visit WildPHP &raquo;</a></p>
	</div>
	<div class="span6">
	  <h2>Requests</h2>
          <?php thumbnail("span6", "contact", "img/template/requests.png"); ?>
	  <p><a class="btn" href="contact">Contact &raquo;</a></p>
	</div>	
</div>
<?php require_once('footer.php'); ?>