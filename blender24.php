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
		  <?php $setURL = 2; require_once('zend.php'); ?>
        </tbody>
      </table>
	</div>
</div>
<?php require_once('footer.php'); ?>