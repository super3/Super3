<?php $page = 2; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Sites</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	<div>
	  <h2>WildPHP</h2>
              <p>Free PHP video tutorials, scripts, and articles.</p>
              <?php thumbnail("span12", "http://wildphp.com", "img/template/wildphp.png"); ?>
	      <p><a class="btn" href="http://wildphp.com">Visit &raquo;</a></p>
	  <h2>Nystic</h2>
	      <p>A large online community for <a href="http://blender.org">Blender</a>.</p>
              <?php thumbnail("span12", "http://forum.nystic.com", "img/template/nystic.png"); ?>
	      <p><a class="btn" href="http://forum.nystic.com">Visit &raquo;</a></p>
	</div>
</div>
<?php require_once('footer.php'); ?>