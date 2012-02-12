<?php $page = 3; require_once('header.php'); ?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
	<h1>Blender 2.4</h1>
</div>

<!-- Row of columns -->
<div class="row left-shift">
	<div>
	  <ul class="media-grid">
		  	<li><a><img class="thumbnail" src="img/template/blender24-big.png" alt="blender25"></a></li>
	  </ul>
	  <p>
      	<a class="btn" href="http://www.youtube.com/watch?v=ozlwcQT-U20&list=PLF4FED3F5A7A48AA1&feature=plpp_play_all">Play on YouTube</a>
      	<a class="btn" href="http://www.youtube.com/playlist?list=PLF4FED3F5A7A48AA1">Goto YouTube Playlist</a>
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
      		<iframe width="560" height="315" src="http://www.youtube.com/embed/ozlwcQT-U20" frameborder="0" allowfullscreen></iframe>
      </div>
      </section>
	  <h2>All Videos</h2>
	  <table>
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
            <tr><td>1</td><td>Basics</td><td>7 minutes</td><td>462,395</td><td><a class="btn" href="#current" onclick="changeIt('ozlwcQT-U20')">Watch Now</a></td></tr>
            <tr><td>2</td><td>Basics - Part 1</td><td>9 minutes</td><td>188,708</td><td><a class="btn" href="#current" onclick="changeIt('xYkaHylMPdc')">Watch Now</a></td></tr>
            <tr><td>3</td><td>Basics - Part 2</td><td>5 minutes</td><td>113,690</td><td><a class="btn" href="#current" onclick="changeIt('Q7omA7imr1k')">Watch Now</a></td></tr>
            <tr><td>4</td><td>part 3) </td><td>7 minutes</td><td>25,868</td><td><a class="btn" href="#current" onclick="changeIt('fwN6TFYxkU0')">Watch Now</a></td></tr>
            <tr><td>5</td><td>Subsurf</td><td>6 minutes</td><td>80,247</td><td><a class="btn" href="#current" onclick="changeIt('bDJ76_chDDo')">Watch Now</a></td></tr>
            <tr><td>6</td><td>Editing</td><td>7 minutes</td><td>161,175</td><td><a class="btn" href="#current" onclick="changeIt('LL-cYoTQI4Q')">Watch Now</a></td></tr>
            <tr><td>7</td><td>Toolbar</td><td>6 minutes</td><td>63,576</td><td><a class="btn" href="#current" onclick="changeIt('l8ZiywMyiBM')">Watch Now</a></td></tr>
            <tr><td>8</td><td>Materials</td><td>5 minutes</td><td>60,097</td><td><a class="btn" href="#current" onclick="changeIt('2kk2BkVQkyk')">Watch Now</a></td></tr>
            <tr><td>9</td><td>Animation</td><td>6 minutes</td><td>169,688</td><td><a class="btn" href="#current" onclick="changeIt('FAZFfLmbD2k')">Watch Now</a></td></tr>
            <tr><td>10</td><td>Scene</td><td>7 minutes</td><td>47,427</td><td><a class="btn" href="#current" onclick="changeIt('baPR_NOGxE8')">Watch Now</a></td></tr>
            <tr><td>11</td><td>Particles</td><td>7 minutes</td><td>68,409</td><td><a class="btn" href="#current" onclick="changeIt('4ylN9yjCP_4')">Watch Now</a></td></tr>
            <tr><td>12</td><td>UV Mapping</td><td>6 minutes</td><td>114,556</td><td><a class="btn" href="#current" onclick="changeIt('mVhhZ2KRr4Q')">Watch Now</a></td></tr>
            <tr><td>13</td><td>Basics</td><td>4 minutes</td><td>13,390</td><td><a class="btn" href="#current" onclick="changeIt('X67IRjt4LQQ')">Watch Now</a></td></tr>
            <tr><td>14</td><td>How to Make Glass</td><td>6 minutes</td><td>80,431</td><td><a class="btn" href="#current" onclick="changeIt('DTs07U5g0wY')">Watch Now</a></td></tr>
            <tr><td>15</td><td>Making Waves</td><td>9 minutes</td><td>68,567</td><td><a class="btn" href="#current" onclick="changeIt('Q9EE5JLoCpk')">Watch Now</a></td></tr>
            <tr><td>16</td><td>Making a Basic Game</td><td>9 minutes</td><td>80,754</td><td><a class="btn" href="#current" onclick="changeIt('WGycLDs_dLg')">Watch Now</a></td></tr>
            <tr><td>17</td><td>A Cloth With Softbodies</td><td>7 minutes</td><td>63,670</td><td><a class="btn" href="#current" onclick="changeIt('mgYhZ3hWwTQ')">Watch Now</a></td></tr>
            <tr><td>18</td><td>Using Blender Fluids</td><td>8 minutes</td><td>79,313</td><td><a class="btn" href="#current" onclick="changeIt('yMBx2pYiqnY')">Watch Now</a></td></tr>
            <tr><td>19</td><td>Grass with Particles</td><td>7 minutes</td><td>91,735</td><td><a class="btn" href="#current" onclick="changeIt('M9aG0xBl9IM')">Watch Now</a></td></tr>
            <tr><td>20</td><td>Making A Chess Board</td><td>6 minutes</td><td>34,028</td><td><a class="btn" href="#current" onclick="changeIt('VhIvaWUxF1E')">Watch Now</a></td></tr>
            <tr><td>21</td><td>Beam Down Effect</td><td>7 minutes</td><td>29,818</td><td><a class="btn" href="#current" onclick="changeIt('lC2KgpdVUUU')">Watch Now</a></td></tr>
            <tr><td>22</td><td>Domino Physics</td><td>7 minutes</td><td>57,174</td><td><a class="btn" href="#current" onclick="changeIt('3kb_utKDu3o')">Watch Now</a></td></tr>
            <tr><td>23</td><td>Using Armatures</td><td>8 minutes</td><td>103,906</td><td><a class="btn" href="#current" onclick="changeIt('GbFvrilssNo')">Watch Now</a></td></tr>
            <tr><td>24</td><td>Making A Sword</td><td>9 minutes</td><td>59,129</td><td><a class="btn" href="#current" onclick="changeIt('whMozCIJGOw')">Watch Now</a></td></tr>
            <tr><td>25</td><td>Using Dupliverts</td><td>5 minutes</td><td>19,458</td><td><a class="btn" href="#current" onclick="changeIt('M6EPXc8N3qs')">Watch Now</a></td></tr>  
        </tbody>
      </table>
	</div>
</div>
<?php require_once('footer.php'); ?>