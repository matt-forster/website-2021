<?php
	$page = "current";
	$highlight = "highlight1";
	include 'common/top.php';
	include 'common/navbar.php';
?>

<!-- CAROUSEL ------------------------------------------------------------- -->
	<div id="top" class="carousel slide">
	  <!-- Carousel items -- -->
	  <div class="carousel-inner">
		<div class="active item">
			<a href="#LIIS"> <img src="../img/liislogo.png" alt="clouds"></a>
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">Laboratory Information Indexing System</span></p>
				<p><small>An ongoing project, for the Lethbridge Federal Research Center</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->

		<div class="item">
			<img src="../img/valley.jpg" alt="valley">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">Announcement with a link to somewhere</span></p>
				<p><small>Placeholder</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->

		<div class="item">
			<img src="../img/water.jpg" alt="water">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">Professional Photo</span></p>
				<p><small>Placeholder</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->

	  </div> <!-- /inner -->

	  <!-- Carousel nav -- -->
	  <a class="carousel-control left" href="#top" data-slide="prev">&lsaquo;</a>
	  <a class="carousel-control right" href="#top" data-slide="next">&rsaquo;</a>
	</div> <!-- /carousel -->

<?php
	include 'common/welcome.php';
?>


<!-- Projects -->
<div class="container">

    <!-- LIIS -->
    <div class="row"><hr>
	    <div class="span8" id="LIIS">
            <span class="feature">LIIS </span><span class="muted smaller">Lab Information Indexing System</span>
            <p class="desc"><strong>The lab information indexing system is my first large projects. </strong>Created for the Lethbridge Research Center, Aliquam venenatis adipiscing sem, at accumsan neque gravida non.<br><br> Nulla nec eros at nibh vulputate dignissim vel vehicula dui. Proin scelerisque tristique orci id semper. 
                Aliquam erat volutpat. <span class="highlight1">Maecenas ipsum turpis,</span> Donec vel diam lorem.<br> pretium vel vehicula a, commodo ut nunc. </p>
            <a data-toggle="modal" href="#liismodal" class="btn">More Information</a>
	    </div>
        <div class="span4">
             <span id="date" class="pull-right muted">Winter 2013</span>
             <img id="liislogo" src="../img/liislogo.png" alt="LIIS Logo">
        </div>
    </div>

    <div class="divider"><hr></div>
    <!-- Placeholder -->
    <div class="row">
        <div class="span4">
             <span id="date" class="pull-left muted">Winter 2013</span>
             <img id="liislogo" src="../img/project-placehold.jpg" alt="LIIS Logo">
        </div>
        <div class="span8">
            <span class="feature">Placeholder </span><span class="muted smaller">Description</span>
            <p class="desc"><strong>First strong sentance. </strong>Created for the Lethbridge Research Center, Aliquam venenatis adipiscing sem, at accumsan neque gravida non.<br><br> <span class="highlight1">Nulla nec eros at nibh vulputate dignissim vel vehicula dui. Proin scelerisque tristique orci id semper.</span> 
                Aliquam erat volutpat. Donec vel diam lorem.<br> faucibus a nisi. Maecenas ipsum turpis, pretium vel vehicula a, commodo ut nunc. 
                <span class="highlight1">Vivamus ac odio eget ipsum dignissim vestibulum.</span> <br>
                eu urna. ibh lobortis in. Ut eu orci risus. Nulla mollis metus laoreet nunc ullamcorper lobortis.</p>
	    </div>
    </div>
</div>


<div class="container">  
    <div id="liismodal" class="modal hide fade in" style="display: none; ">  
        <div class="modal-header">  
            <a class="close" data-dismiss="modal">x</a>  
            <h3>LIIS</h3>  
        </div>  
        <div class="modal-body">
            Extra Pictures and description goes here.
        </div>  
        <div class="modal-footer">  
            <a class="btn" data-dismiss="modal">Close</a>  
        </div>  
        </form> 
    </div>  
    <p> 
</div>
	
<?php
	include 'common/contact.php';
	include 'common/foot.php';
?>

