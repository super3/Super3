<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 
  4.0 Transitional//EN">
<html>
<head>
	<title>Super3.org - Art. Web. Dev.</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	<link rel="shortcut icon" href="images/template/block.png"> 
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
	<?php require_once("function.php"); ?>
</head>
<body>
<div id="logo"></div>
	<div class="center-me">
		<div class="menu">
			<ul class="navlist">
				<li><a href="/"<?php if($page == 1) { echo " style=\"background-color: #3b373e;\""; }?>>Home</a></li>
				<li><a href="/sites"<?php if($page == 2) { echo " style=\"background-color: #3b373e;\""; }?>>Sites</a></li>
				<li><a href="/tutorials"<?php if($page == 3) { echo " style=\"background-color: #3b373e;\""; }?>>Tutorials</a></li>
				<li><a href="/code"<?php if($page == 4) { echo " style=\"background-color: #3b373e;\""; }?>>Code</a></li>
				
				<li style="float: right;"><a href="/freebies"<?php if($page == 5) { echo " style=\"background-color: #3b373e;\""; }?>>Freebies</a></li>
			</ul>
		</div>
		<div id="gradient-top"></div>
		<div id="shift">
			<div class="content-area">