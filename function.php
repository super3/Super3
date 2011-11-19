<?php
//Prints out a BLOCK
function show($title1, $title2, $descrip, $img, $link, $linkText, $spacer) {
	//Generate Title
	if($title2 != null) {
		$title_result = "
		<p class='title-top'>$title1</p>
		<p class='title-bottom'>$title2</p>";
	}
	else {
		$title_result = "<p class='title'>$title1</p>";
	}
	
	//BLOCK code with values replaced
	$result = "
	<div class='area-left'>
		<a href='$link'><img src='$img' alt='screenshot'></a>
	</div>
	<div class='area-right'>
		<div class='title-contain'>
			$title_result
		</div>
		<p class='descrip-small'>
			$descrip
		</p>
		<p><a href='$link'>$linkText</a></p>	
	</div>";
	//Add a space to the bottom if true
	if($spacer) {
		$result .= "<div class=\"spacer\"></div>";
	}
	//Return code
	return $result;
}
?>

