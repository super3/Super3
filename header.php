<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Super3.org - Art. Web. Dev.</title>
	<!--<meta name="description" content="">-->
	<!--<meta name="author" content="">-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Le styles -->
	<link href="sty/bootstrap.css" rel="stylesheet">
	<link href="sty/style.css" rel="stylesheet">
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- Place Google Analytics Here -->
</head>
<body>
	<!-- Navigation bar -->
	<div class="topbar">
	  <div class="fill">
	    <div class="container">
	      <a class="brand" href="index.php">Super3.org</a>
	      <ul class="nav">
	        <li <?php if($page == 1) { echo "class=\"active\";"; }?> ><a href="index.php">Home</a></li>
	        <li <?php if($page == 2) { echo "class=\"active\";"; }?>><a href="sites.php">Sites</a></li>
	        <li <?php if($page == 3) { echo "class=\"active\";"; }?>><a href="tutorials.php">Tutorials</a></li>
	        <li <?php if($page == 4) { echo "class=\"active\";"; }?>><a href="code.php">Code</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
	
	<div class="container">
	  <!-- Logo superhero image -->
	  <div class="logo">
	  	<img src="img/template/logo.png" alt="logo" class="center"/>
	  </div>