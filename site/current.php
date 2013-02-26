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
			<img src="../img/clouds.jpg" alt="clouds">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">what lovely clouds</span></p>
				<p><small>very nice</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->

		<div class="item">
			<img src="../img/valley.jpg" alt="valley">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">a senic valley</span></p>
				<p><small>could have a picnic</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->

		<div class="item">
			<img src="../img/water.jpg" alt="water">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight1">so very blue</span></p>
				<p><small>the ocean is full of life</small></p>
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

<div class="divider"><hr></div>
<!-- temp spacing -->
<div class="row" id="space">
	<div class="span12">
	</div>
</div>

	
<?php
	include 'common/contact.php';
	include 'common/foot.php';
?>

