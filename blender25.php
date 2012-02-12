<?php $page = 3; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Blender 2.5</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	<div>
            <?php thumbnail("span12", "#", "img/template/blender25-big.png"); ?>
	  <p>
      	<a class="btn" href="http://www.youtube.com/watch?v=3BwptkZCWwU&#038;list=PL13FCE5A9EF9026CE&#038;feature=plpp_play_all">Play on YouTube</a>
      	<a class="btn" href="http://www.youtube.com/playlist?list=PL13FCE5A9EF9026CE">Goto YouTube Playlist</a>
      </p>
      <script type="text/javascript">
		function changeIt(vidID){
			var oVDiv=document.getElementById("txt");
			oVDiv.innerHTML = "<iframe width=\"560\" height=\"315\" src=\"http://www.youtube.com/embed/" + vidID + "\" frameborder=\"0\" allowfullscreen></iframe>";
			// alert(vidID);	
		}
	  </script>
	  <section id="current">
      <h2 style="padding-top: 40px;">Current Video</h2>
      <div style="width: 560px; height: 340px; margin: 0 auto;" id="txt">
      		<iframe width="560" height="315" src="http://www.youtube.com/embed/3BwptkZCWwU" frameborder="0" allowfullscreen></iframe>
      </div>
      </section>
	  <h2>All Videos</h2>
	  <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Length</th>
            <th>Views</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
		  <tr><td>1</td><td>Basics </td><td>11 minutes</td><td>104,908</td><td><a class="btn" href="#current" onclick="changeIt('3BwptkZCWwU')">Watch Now</a></td></tr>
                  <tr><td>2</td><td>Objects </td><td>9 minutes</td><td>32,922</td><td><a class="btn" href="#current" onclick="changeIt('XloEwL0H5lw')">Watch Now</a></td></tr>
                  <tr><td>3</td><td>Subsurf </td><td>10 minutes</td><td>25,449</td><td><a class="btn" href="#current" onclick="changeIt('SxbV_-jRpjQ')">Watch Now</a></td></tr>
                  <tr><td>4</td><td>Editing </td><td>11 minutes</td><td>18,637</td><td><a class="btn" href="#current" onclick="changeIt('oUoc9A9uk8I')">Watch Now</a></td></tr>
                  <tr><td>5</td><td>Toolbar and Arrays</td><td>11 minutes</td><td>16,401</td><td><a class="btn" href="#current" onclick="changeIt('6JtGC1VLSFc')">Watch Now</a></td></tr>
                  <tr><td>6</td><td>Materials</td><td>7 minutes</td><td>19,474</td><td><a class="btn" href="#current" onclick="changeIt('n182T7ne6PE')">Watch Now</a></td></tr>
                  <tr><td>7</td><td>Animation </td><td>8 minutes</td><td>22,831</td><td><a class="btn" href="#current" onclick="changeIt('DV6Oq8HZ8J0')">Watch Now</a></td></tr>
                  <tr><td>8</td><td>Scene  </td><td>14 minutes</td><td>11,054</td><td><a class="btn" href="#current" onclick="changeIt('E-ynbaPWwM4')">Watch Now</a></td></tr>
                  <tr><td>9</td><td>Particles  </td><td>11 minutes</td><td>11,942</td><td><a class="btn" href="#current" onclick="changeIt('Z8cluXxEK6E')">Watch Now</a></td></tr>
                  <tr><td>10</td><td>UV Mapping </td><td>19 minutes</td><td>17,067</td><td><a class="btn" href="#current" onclick="changeIt('YoYe1Z_vu9M')">Watch Now</a></td></tr>
                  <tr><td>11</td><td>Blender 2.5</td><td>4 minutes</td><td>6,441</td><td><a class="btn" href="#current" onclick="changeIt('KxD7FGeGR9Q')">Watch Now</a></td></tr>
                  <tr><td>12</td><td>Glass </td><td>11 minutes</td><td>10,179</td><td><a class="btn" href="#current" onclick="changeIt('d0uzCilCOYo')">Watch Now</a></td></tr>
                  <tr><td>13</td><td>Making Waves </td><td>6 minutes</td><td>8,525</td><td><a class="btn" href="#current" onclick="changeIt('P0IdfLxWlsQ')">Watch Now</a></td></tr>
                  <tr><td>14</td><td>Intro to Logic Bricks</td><td>15 minutes</td><td>12,608</td><td><a class="btn" href="#current" onclick="changeIt('SDaLjTRWA-s')">Watch Now</a></td></tr>
                  <tr><td>15</td><td>Jump and Textures</td><td>9 minutes</td><td>18,909</td><td><a class="btn" href="#current" onclick="changeIt('Lg5MMGR3q00')">Watch Now</a></td></tr>
                  <tr><td>16</td><td> ALT + LMB </td><td>2 minutes</td><td>7,185</td><td><a class="btn" href="#current" onclick="changeIt('d1lYgSaA6UQ')">Watch Now</a></td></tr> 
        </tbody>
      </table>
	</div>
</div>
<?php require_once('footer.php'); ?>