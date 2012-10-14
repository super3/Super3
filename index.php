<?php 
// Set Pages
if( !isset($_GET['page']) ) { $page = 'index'; }
else { $page = $_GET['page']; }

// Better Sanitize That GET Data
strtolower ( trim ( $page ) );
$page = filter_var($page, FILTER_SANITIZE_STRING);

// Check to See if the Page Exsists
if(!file_exists('pages/'.$page.'.php'))
	$page = '404';

// Show Regular Page
include_once('template/header.php');
include_once('pages/'.$page.'.php'); 
include_once('template/footer.php'); 
?>