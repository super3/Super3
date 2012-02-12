<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Super3.org - Art. Web. Dev.</title>
	<meta name="description" content="Free code, art, and tutorials.">
	<meta name="author" content="Shawn Wilkinson">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <style>
            p { padding-top: 15px; }
          </style>
	<![endif]-->
	
	<!-- Le styles -->
	<link href="sty/bootstrap.css" rel="stylesheet">
	<link href="sty/style.css" rel="stylesheet">
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="img/template/fav.png">
	
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
            require_once('functions.php');
        ?>
</head>
<body>
	<!-- Navigation bar -->
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand" href="index.php">Super3.org</a>
	      <ul class="nav">
	        <li <?php if($page == 1) { echo "class=\"active\""; }?> ><a href="index">Home</a></li>
	        <li <?php if($page == 2) { echo "class=\"active\""; }?>><a href="sites">Sites</a></li>
	        <li <?php if($page == 3) { echo "class=\"active\""; }?>><a href="tutorials">Tutorials</a></li>
	        <li <?php if($page == 4) { echo "class=\"active\""; }?>><a href="code">Code</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
	
	<div class="container">
	  <!-- Logo superhero image -->
	  <div class="logo">
	  	<img src="img/template/logo.png" alt="logo" class="center"/>
	  </div>