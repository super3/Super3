<?php 
// Set and Show Header
$page = 1; require_once('header.php'); 

// Print Blocks
echo show('welcome to', 'super3\'s corner', 'My place on the net to share my work with web development, 
	art, and programing.', 'img/thumbs/codecube.png', '/about', 'Learn More', true);
	
echo show('RPG Tutorial #1', 'Logic Bricks', 'The start of a new Blender Tutorials series on making an RPG Game in Blender. 
	Covers logic bricks.', 'img/thumbs/rpg1.png', 'watch?video=SDaLjTRWA-s', 'Watch', true);
	
echo show('RPG Tutorial #2', 'UV Textures', 'In this tutorial we texture our cube character, and add a jump feature. Continuation
	 of the series.', 'img/thumbs/rpg2.png', 'watch?video=Lg5MMGR3q00', 'Watch', false);

// Show Footer
require_once('footer.php'); 
?>