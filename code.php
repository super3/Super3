<?php 
// Set and Show Header
$page = 4; require_once('header.php'); 

// Print Blocks
echo show('Zombie Factory', null, '
		A simple zombie shooting game made with PyGame and Python. Initially just a test, it shows the 
		what you can do with only a few hundred lines of code in PyGame.',
		'img/thumbs/zombie-factory.png', 'https://github.com/super3/Zombie-Factory', 'Goto GitHub', true);
		
echo show('FastF12', null, '
		A rendering tool for Blender made in C#. Provides an easy to use GUI for Blender\' command line
		arguments. Might be ported to C++ or Python in the future.',
		'img/thumbs/fastf12.png', 'https://github.com/super3/FastF12', 'Goto GitHub', true);

// Spacing
echo '<div class="splitter"><img src="img/template/splitter.png" alt="splitter"/><div>';

// Print Blocks
echo show('Tic Tac Toe', null, '
		A simple Tic Tac Toe game written in C++. The program runs in console, and allows
		two human players to choose grid locations to play. I am working on optimizing the code,
		and adding AI players. ', 'img/thumbs/tictactoe.png', 'downloads/TicTacToeConsole.zip', 'Download Code', true);
		
echo show('jVotes', null, 'My first test with Javascript. The script allows you to submit a vote, and it page updates automatically.
		 You can add or subtract the number of votes that are given to you. ', 'img/thumbs/jvotes.png', 'downloads/jvotes.zip',
		 'Download Code', true);

echo show('jGrid', null, 'Another test with Javascript, this time with graphics. Code contructs a grid of DIV squares. One function will
		 allow you color selected grid sqares. Other will let you move them. ', 'img/thumbs/jgrid.png', 'downloads/jgrid.zip',
		 'Download Code', true);

echo show('Crazy Colors', null, 'A test with Python and Pygame. Randomly displays randomly colored block squares. Serves as a basic 
		example of Pygame and introduction to Python. ', 'img/thumbs/crazycolors.png', 'downloads/CrazyColors.zip', 'Download Code', false);

// Show Footer
require_once('footer.php'); 
?>