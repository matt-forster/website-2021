<?php
	$page = "past";
	$highlight = "highlight2";
	include 'common/top.php';
	include 'common/navbar.php';
?>

<!-- CAROUSEL ------------------------------------------------------------- -->
	<div id="top" class="carousel slide">
	  <!-- Carousel items -- -->
	  <div class="carousel-inner">
		<div class="active item">
			<img src="../img/water.jpg" alt="water">
			<div class="carousel-caption">
				<p class="lead"><span class="highlight2">Past Projects</span></p>
				<p><small>Placeholder</small></p>
			</div> <!-- /caption -->
		</div> <!-- /item -->
	  </div> <!-- /inner -->
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