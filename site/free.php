<?php
	$page = "free";
	$highlight = "highlight3";
	include 'common/top.php';
	include 'common/navbar.php';
?>

<!-- CAROUSEL ------------------------------------------------------------- -->
	<div id="top" class="carousel slide">
	  <!-- Carousel items -- -->
	  <div class="carousel-inner">
		<div class="active item">
			<img src="../img/skills.jpg" alt="valley">
		</div> <!-- /item -->
	  </div> <!-- /inner -->
	</div> <!-- /carousel -->

<?php
	include 'common/welcome.php';
?>


<div class="container">

    <!-- LIIS -->
    <div class="row"><hr>
        <div class="span4">
             <img id="liislogo" src="../img/pro-placehold.jpg" alt="LIIS Logo">
        </div>
	    <div class="span8">
            <span class="feature">Info</span><span class="muted smaller"> about why you should hire me.</span>
            <p class="desc"><strong>The lab information indexing system is my first large projects. </strong>Created for the Lethbridge Research Center, Aliquam venenatis adipiscing sem, at accumsan neque gravida non.<br><br> Nulla nec eros at nibh vulputate dignissim vel vehicula dui. Proin scelerisque tristique orci id semper. 
                Aliquam erat volutphat. <span class="highlight3">Maecenas ipsum turpis,</span> Donec vel diam lorem.<br> pretium vel vehicula a, commodo ut nunc. </p>
            <a target="_blank" href="https://www.elance.com/s/matthforster/" class="btn btn-highlight3">Vist My Elance profile to hire me.</a>
	    </div>
    </div>

</div>

	
<?php
	include 'common/contact.php';
	include 'common/foot.php';
?>