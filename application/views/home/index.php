	
	<div class="container-fluid">
		<div class="row">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="<?php echo base_url(); ?>assets/images/gray.png" alt="No Image" width="100%" height="280px">
			  </div>

			  <div class="item">
				<img src="<?php echo base_url(); ?>assets/images/green.png" alt="Chania" width="100%" height="280px">
			  </div>

			  <div class="item">
				<img src="<?php echo base_url(); ?>assets/images/purple.png" alt="Flower" width="100%" height="280px">
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row text-center" style="margin: 40px 0px;">
			<div class="col-md-4">
                 <h2>Heading</h2>
                 <p style="margin: 15px 30px;">Some Content Some Content Some Content Some Content Some contentSome Content </p>
                 <img src="<?php echo base_url(); ?>assets/images/purple.png" class="img-responsive" />
             </div>
             <div class="col-md-4">
                 <h2>Heading</h2>
                 <p style="margin: 15px 30px;">Some Content Some Content Some Content Some Content Some contentSome Content </p>
                 <img src="<?php echo base_url(); ?>assets/images/green.png" class="img-responsive" />
             </div>
             <div class="col-md-4">
                 <h2>Heading</h2>
                 <p style="margin: 15px 30px;">Some Content Some Content Some Content Some Content Some contentSome Content </p>
                 <img src="<?php echo base_url(); ?>assets/images/gray.png" class="img-responsive" />
             </div>
		</div>
	</div>

	<footer class="navbar navbar-inverse" style="margin-top: 2px; color: #FFF;">
	    <div class="container">
	    	<div class="col-md-6">
				<p style="margin-top: 10px;">Copyright © Authentication App 2018. All rights reserved</p> 
			</div>	
			<div class="col-md-6">
				<p class="pull-right" style="margin-top: 10px;">Developed by <a href="http://www.facebook.com/shahnewaz24557">Shahnewaz Ahmed</a></p> 	
	    	</div>
	    </div>
	</footer>