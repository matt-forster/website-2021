<div class="container"> <!-- welcome wrapper -->
	<div class="row center">
		<div class="span12">
			<p class="feature">Hello! 
				<?php 
					echo
						'<span class="muted smaller" >My name is <span class="'.$highlight.'">Matt</span>, and I am a <span class="'.$highlight.'">programmer</span>.
						 I\'m glad you\'re here! This is my <span class="'.$highlight.'"> Portfolio</span>,  feel free to look around.</span>'
					 ;
				?>
			</p>  
		</div>
	</div>
	<?php
		if($page == "current"){
			echo 
				'<div class="row center">
                    <div class="well hidden-desktop">
                        <div class="span4 feature highlight1 " id="link1">
                            <p>Current Projects</p>
                        </div>
                        <div class="span4 feature mouse-over" id="link2">
                            <p><a href="past.php">Past<br> Projects</a></p>
                        </div>
                        <div class="span4 feature mouse-over" id="link3">
                            <p><a href="free.php">Freelancing</a>  <span class="smaller muted"> Looking to hire me?</span></p>
                        </div>
                    </div>
				</div>'
			;
		}
		if($page == "past"){
			echo 
				'<div class="row center">
                    <div class="well hidden-desktop">
                        <div class="span4 feature mouse-over" id="link1">
                            <p><a href="current.php">Current Projects</a></p>
                        </div>
                        <div class="span4 feature highlight2" id="link2">
                            <p>Past<br> Projects</p>
                        </div>
                        <div class="span4 feature mouse-over" id="link3">
                            <p><a href="free.php">Freelancing</a> <span class="smaller muted"> Looking to hire me?</span></p>
                        </div>
                    </div>
				</div>'
			;
		}
		if($page == "free"){
			echo 
				'<div class="row center">
                    <div class="well hidden-desktop">
                        <div class="span4 feature mouse-over" id="link1">
                            <p><a href="current.php">Current Projects</a></p>
                        </div>
                        <div class="span4 feature mouse-over" id="link2">
                            <p><a href="past.php">Past<br> Projects</a></p>
                        </div>
                        <div class="span4 feature highlight3" id="link3">
                            <p>Freelancing  <span class="smaller muted"> Looking to hire me?</span></p>
                        </div>
                    </div>
				</div>'
			;
		}
		
	?>
</div> <!-- /welcome wrapper -->