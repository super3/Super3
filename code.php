<?php 
// Set and Show Header
$page = 4; require_once('header.php'); 

// Print Blocks
echo show('Tic Tac Toe', null, '
		A simple Tic Tac Toe game written in C++. The program runs in console, and allows
		two human players to choose grid locations to play. I am working on optimizing the code,
		and adding AI players. ', 'images/thumbs/tictactoe.png', 'downloads/TicTacToeConsole.zip', 'Download Code', true);
		
echo show('jVotes', null, 'My first test with Javascript. The script allows you to submit a vote, and it page updates automatically.
		 You can add or subtract the number of votes that are given to you. ', 'images/thumbs/jvotes.png', 'downloads/jvotes.zip',
		 'Download Code', true);

echo show('jGrid', null, 'Another test with Javascript, this time with graphics. Code contructs a grid of DIV squares. One function will
		 allow you color selected grid sqares. Other will let you move them. ', 'images/thumbs/jgrid.png', 'downloads/jgrid.zip',
		 'Download Code', true);

echo show('Crazy Colors', null, 'A test with Python and Pygame. Randomly displays randomly colored block squares. Serves as a basic 
		example of Pygame and introduction to Python. ', 'images/thumbs/crazycolors.png', 'downloads/CrazyColors.zip', 'Download Code', false);

// Show Footer
require_once('footer.php'); 
?>