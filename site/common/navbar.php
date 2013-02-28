
<!-- NAVBAR --------------------------------------------------------------- -->
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="/index.php">Matt Forster</a>

				<!-- Left Menu -- -->
				<ul class="nav">
					<?php
						if($page == "current"){
							echo 
							'<li class="active">
						 		<a href="#top">Current Projects</a>
						 	</li>
						 	<li>
						 		<a href="past.php">Past Projects</a>
						 	</li>
						 	<li>
						 		<a href="free.php">Freelancing</a>
						 	</li>'
						 	;
						}
						if($page == "past"){
							echo 
							'<li>
						 		<a href="current.php">Current Projects</a>
						 	</li>
						 	<li class="active">
						 		<a href="#top">Past Projects</a>
						 	</li>
						 	<li>
						 		<a href="free.php">Freelancing</a>
						 	</li>'
						 	;
						}
						if($page == "free"){
							echo 
							'<li>
						 		<a href="current.php">Current Projects</a>
						 	</li>
						 	<li>
						 		<a href="past.php">Past Projects</a>
						 	</li>
						 	<li class="active">
						 		<a href="#top">Freelancing</a>
						 	</li>'
						 	;
						}
				 	?>
				 	<li>
						<a href="/blog">Blog</a>
					</li>
				</ul>

				<!-- Right Menu -- -->
				<ul class="nav pull-right">
					<li>
				 		<a href="#about">About</a>
				 	</li>
					<li>
				 		<a href="#contact">Contact</a>
				 	</li>
				</ul>

			</div> <!-- /inner -->
		</div> <!-- /navbar -->
	</div> <!-- /container -->
</div> <!-- /navbar-wrapper -->