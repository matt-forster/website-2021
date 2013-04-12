<?php
	$page = "current";
	$highlight = "highlight1";
	include 'common/top.php';
	include 'common/navbar.php';
?>

<!-- CAROUSEL ------------------------------------------------------------- -->
    <div class="car-back"></div>
	<div id="top" class="carousel slide">
	  <!-- Carousel items -- -->
	  <div class="carousel-inner">
      	<div class="active item">
			<img src="../img/introcurr.jpg" alt="Matt Forster">
		</div> <!-- /item -->
      
		<div class="item">
			<a href="#LIIS"> <img src="../img/liisslide.jpg" alt="Lab Information Indexing System"></a>
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
    <div class="span1"></div>
	    <div class="span6" id="LIIS">
            <span class="feature">LIIS </span><span class="muted smaller">Lab Information Indexing System <a target="_blank" href="http://github.com/align/liis">github:align/liis</a></span>
            <p class="desc"><strong>The lab information indexing system is my first large projects. </strong>Created for the Lethbridge Research Center, it is a <span class="highlight1"> database with a web-driven interface </span>, focused on simple, easy use (something that is of scarce quantity in science labs). </p>
            <a data-toggle="modal" href="#liismodal" class="btn">More Information</a>
	    </div>
        <div class="span4">
             <span id="date" class="pull-right muted">Winter 2012</span>
             <img id="liislogo" src="../img/liislogo.png" alt="LIIS Logo">
        </div>
        <div class="span1"></div>
    </div>
    
</div><!-- /container -->


<div class="container">  
    <div id="liismodal" class="modal hide fade in" style="display: none; ">  
        <div class="modal-header">  
            <a class="close" data-dismiss="modal">x</a>  
            <h3>LIIS - Laboratory Information Indexing System</h3>  
        </div>  
        <div class="modal-body">
          <p>Created during my second year at the lethbridge college, I have been continually working on improvements.<br><br> I have learnt many things during the development, including how to manage a team, and the ins and outs of the Systems Development Life Cycle.<br></p>
            <div class="center" id="thumbs">
            	<div id="thumb"><a href="../img/liissearch.PNG" class="thumbnail"><img src="../img/liissearch.PNG" alt="search-thumbnail" height="150" width="100"></a></div>
            	<div id="thumb"><a href="../img/liisview.PNG" class="thumbnail"><img src="../img/liisview.PNG" alt="view-thumbnail" height="150" width="100"></a></div>
            	<div id="thumb"><a href="../img/liisedit.PNG" class="thumbnail"><img src="../img/liissearch.PNG" alt="edit-thumbnail" height="150" width="100"></a></div>
            </div>
        </div>  
        <div class="modal-footer">  
            <a class="btn" data-dismiss="modal">Close</a>  
        </div>  
    </div>  
    <p> 
</div>
	
<?php
	include 'common/contact.php';
	include 'common/foot.php';
?>

