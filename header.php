<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?>&ndash; Art. Web. Dev.</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Le styles -->
	<link href="<?php bloginfo('template_url'); ?>/sty/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/fav.png">
	
	<!-- Start: Google Analytics Code -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-13166299-4']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- End: Google Analytics Code -->
	
    <!-- Le comments -->
    <?php if( is_singular() ) wp_enqueue_script(comment-reply); ?>
    
    <!-- Extra wordpress header stuff -->
    <?php wp_head(); ?>
</head>
<body>
	<!-- Navigation bar -->
	<div class="topbar">
	  <div class="fill">
	    <div class="container">
	      <a class="brand" href="http://super3.org/">Super3.org</a>
	      <ul class="nav">
	        <li <?php if(!is_page('')) { echo "class=\"active\""; }?> ><a href="http://super3.org/">Home</a></li>
	        <li <?php if(is_page('sites')) { echo "class=\"active\""; }?>><a href="http://super3.org/sites">Sites</a></li>
	        <li <?php if(is_page('tutorials')) { echo "class=\"active\""; }?>><a href="http://super3.org/tutorials">Tutorials</a></li>
	        <li <?php if(is_page('code')) { echo "class=\"active\""; }?>><a href="http://super3.org/code">Code</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
	
	<div class="container">
	  <!-- Logo superhero image -->
	  <div class="logo">
	  	<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" class="center"/>
	  </div>