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
            <span class="feature">Have a project?</span><span class="muted smaller"> I can help!</span>
            <p class="desc">I have a plethora of skills, and I am always looking to learn more! I take on many projects, whether they be small or large. Don't hesitate to contact me with any ideas you might have!</p>
            
            <a target="_blank" href="https://www.elance.com/s/matthforster/" class="btn btn-highlight3">Vist My Elance profile to hire me.</a>
	    </div>
    </div>

</div>

	
<?php
	include 'common/contact.php';
	include 'common/foot.php';
?>