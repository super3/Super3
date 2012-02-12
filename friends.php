<?php $page = 0; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Friends</h1>
</div>

<!-- Row of columns -->
<div class="row show-grid">
	<div class="span6">
	  <h2>AJ Moore</h2>
	  	  <p>Created the awesome Super3 logo. Check out his comic!</p>
                   <?php thumbnail("span6", "http://gudfit.com/", "img/template/aj.png"); ?>
	      <p>
	      	<a class="btn" href="http://gudfit.com/">Visit &raquo;</a>
          </p>
	</div>
	<div class="span6">
	  <h2>Dryicons</h2>
	      <p>Social icons on the about page. Some really great icons you should check out.</p>
               <?php thumbnail("span6", "http://dryicons.com", "img/template/icons.png"); ?>
	      <p>
	      	<a class="btn" href="http://dryicons.com">Visit &raquo;</a>
          </p>
	</div>
</div>
<?php require_once('footer.php'); ?>