
<!-- NAVBAR --------------------------------------------------------------- -->
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<a class="brand" href="/index.php">Matt Forster</a>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                
				<!-- Left Menu -- -->
                <div class="nav-collapse collapse">
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
                            <a href="/downloads/MattForster.pdf" target="_blank">Resume</a>
                        </li>
                    </ul>
    
                    <!-- Right Menu -- -->
                    <ul class="nav pull-right">
                        <li>
                            <a href="#contact">About & Contact</a>
                        </li>
                    </ul>
				</div>
                
			</div> <!-- /inner -->
		</div> <!-- /navbar -->
	</div> <!-- /container -->
</div> <!-- /navbar-wrapper -->
