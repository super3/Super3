<?php $page = 4; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Code</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	<div>
	  <h2>Zombie Factory</h2>
              <p>A simple zombie shooting game made with <a href="http://pygame.org">PyGame</a> and Python.</p>
              <?php thumbnail("span12", "zombie-factory", "img/template/zombie-factory.png"); ?>
	      <p><a class="btn" href="zombie-factory">More &raquo;</a></p>
	  <h2>FastF12</h2>
	      <p>A rendering tool for <a href="http://blender.org">Blender</a> made in C#.</p>
              <?php thumbnail("span12", "fastf12", "img/template/fastf12.png"); ?>
	      <p><a class="btn" href="fastf12">More &raquo;</a></p>
	</div>
</div>
<?php require_once('footer.php'); ?>