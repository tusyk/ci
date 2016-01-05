<div class="main_container">
	<div class="container-fluid text-left">
		<h2 class="p_title">
		<?PHP echo strtoupper($article['title']); ?>
		</h2>
		<div class = "row">
			<div class="col-sm-6" style="text-align:left;">
			
				<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				  <div class="item active">
					<img  src="<?php echo base_url(); ?>assets/images/home1.jpg" class="img-responsive" style="width:100%;" alt="Image">
				  </div>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/images/home1.jpg" class="img-responsive" style="width:100%;" alt="Image">
				  </div>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/images/home1.jpg" class="img-responsive" style="width:100%;" alt="Image">
				  </div>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/images/home1.jpg" class="img-responsive" style="width:100%;" alt="Image">
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
			<div class="col-sm-6" style="text-align:left;">
				<p class="p_text" style="padding-top:20px;">
				<?PHP echo $article['description']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
