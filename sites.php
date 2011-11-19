<?php 
//Set and Show Header
$page = 2; require_once('header.php'); 

//Print Blocks
echo show('WildPHP', null, 'Access to free video tutorials, text tutorials, instructional labs, scripts, 
	and articles on PHP.', 'images/thumbs/wildphp-screen.png', 'http://wildphp.com', 'Visit Site', true);
	
echo show('Nystic 2.0', null, 'A long running beginner community for Blender, a open  source, suite of tools for 3D creation.
	 Features dozens of free tutorials and models, as well as helpful support.', 'images/thumbs/nystic-screen.png', 'http://nystic.com',
	 'Visit Site', false);

//Show Footer
require_once('footer.php');
 ?>