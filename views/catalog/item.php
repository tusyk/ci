<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/item.css">

<div class="main_container">
	<div class="container-fluid text-left">
		<h2 class="p_title">OUR WORK</h2><br><br>
		
		<div class="row">
			<div class="col-sm-3" style="text-align:left;">
			<?php $this->view('catalog/menu.php'); ?>
			<div style="height:20px;"></div>
			</div>
			<div class="col-sm-9 text-left" style="">
		
				<h4 class="p_sub_title"><?PHP echo $catalog_item['title']; ?></h4><br><br>
				
				<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="max-width:550px; margin-left: auto;
				margin-right: auto; ">
				<!-- Indicators -->
				<ol class="carousel-indicators " style="">
				  <li data-target="#myCarousel" data-slide-to="0"  class=" active" style="width:70px;"><img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo1_s']; ?>" class="img-responsive" style="width:50px; border:2px solid #cccccc; " alt="Image"></li>
				  <?PHP if(!empty($catalog_item['photo2_l']) AND $catalog_item['photo2_l']!='noimage.jpg') { ?>
				  <li data-target="#myCarousel" data-slide-to="1"  class="" style="width:70px;"><img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo2_s']; ?>" class="img-responsive" style="width:50px; border:2px solid #cccccc;" alt="Image"></li>
				  <?PHP } 
				  if(!empty($catalog_item['photo3_l']) AND $catalog_item['photo3_l']!='noimage.jpg') {
				  ?>
				  <li data-target="#myCarousel" data-slide-to="2"  class="" style="width:70px;"><img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo3_s']; ?>" class="img-responsive" style="width:50px; border:2px solid #cccccc;" alt="Image"></li>
				  <?PHP } 
				  if(!empty($catalog_item['photo4_l']) AND $catalog_item['photo4_l']!='noimage.jpg') {
				  ?>
				  <li data-target="#myCarousel" data-slide-to="3"  class="" style="width:70px;"><img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo4_s']; ?>" class="img-responsive" style="width:50px; border:2px solid #cccccc;" alt="Image"></li>
				  <?PHP } ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox" style="padding-bottom:60px;">
				  <div class="item active">
					<img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo1_l']; ?>" class="img-thumbnail" style="max-width:100%; " alt="Image">
				  </div>
				  <?PHP if(!empty($catalog_item['photo2_l']) AND $catalog_item['photo2_l']!='noimage.jpg') { ?>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo2_l']; ?>" class="img-thumbnail" style="max-width:100%;" alt="Image">
				  </div>
				  <?PHP } 
				  if(!empty($catalog_item['photo3_l']) AND $catalog_item['photo3_l']!='noimage.jpg') {
				  ?>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo3_l']; ?>" class="img-thumbnail" style="max-width:100%;" alt="Image">
				  </div>
				  <?PHP } 
				  if(!empty($catalog_item['photo4_l']) AND $catalog_item['photo4_l']!='noimage.jpg') {
				  ?>
				  <div class="item">
					<img  src="<?php echo base_url(); ?>assets/<?PHP echo $catalog_item['photo4_l']; ?>" class="img-thumbnail" style="max-width:100%;" alt="Image">
				  </div>
				  <?PHP } ?>
				</div>

			</div>
			<div style="height:20px;"></div>
			<p class="p_text"><?PHP echo $category_info['description']; ?></p>
			</div>
	
		</div>
	</div>
</div>