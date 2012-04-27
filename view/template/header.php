<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Super3.org - Art. Web. Dev.</title>
	<meta name="description" content="Free code, art, and tutorials.">
	<meta name="author" content="Shawn Wilkinson">
    <meta name="google-site-verification" content="e6dbTwQqdVD2bfhQHxogQWcON07KKZdlIJDNyXL4BpQ" />
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <style>
            p { padding-top: 15px; }
        </style>
	<![endif]-->
	
	<!-- Le styles -->
	<link href="view/css/bootstrap.css" rel="stylesheet">
	<link href="view/css/style.css" rel="stylesheet">
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="view/images/template/fav.png">
	
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
        
        <!-- Le PHP includes -->
        <?php
            require_once('model/functions.php');
        ?>
</head>
<body>
	<!-- Navigation bar -->
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand" href="index">Super3.org</a>
	      <ul class="nav">
	        <li <?php showActive($page, 'index', true); ?>><a href="index">Home</a></li>
	        <li <?php showActive($page, 'sites', true); ?>><a href="sites">Sites</a></li>
	        <li <?php showActive($page, 'tutorials', true); ?>><a href="tutorials">Tutorials</a></li>
	        <li <?php showActive($page, 'code', true); ?>><a href="code">Code</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
	
	<div class="container">
	  <!-- Logo superhero image -->
	  <div class="logo">
	  	<img src="view/images/template/logo.png" alt="logo" class="center"/>
	  </div>