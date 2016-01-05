<div style="max-width:1000px; margin:auto;">
	<div class="container-fluid text-left">
		<h2 class="p_title">OUR WORK</h2><br><br>
		
		<div class="row">
			<div class="col-sm-3" style="text-align:left;">
			<?php $this->view('catalog/menu.php'); ?>
			
			<div style="height:20px;"></div>
			</div>
			<div class="col-sm-9 text-center" style="">
				<h4 class="p_sub_title"><?php echo $category_title; ?></h4><br><br>
				<div class="row text-center">
				<?php foreach ($category_list as $category_list_item): ?>
					<div class="col-md-6 text-center" style="padding-bottom:10px;">
						<?php  
						$link_segment2=str_replace("/"," ",$category_list_item['title']);
						$link_segment2=stripslashes(str_replace(" ","_",$link_segment2));
						$link_segment3=base_url_2().'catalog/items/'.$category_list_item['item_id'].'_'.$link_segment2.'/';
						
						?>
						<a href="<?PHP echo $link_segment3; ?>">
						<img  src="<?php echo base_url(); ?>assets/<?PHP echo $category_list_item['photo1_l']; ?>" class="img-responsive" style="max-width:100%; margin-left: auto;
						margin-right: auto;" alt="Image">
						</a>
					</div>
					<?php endforeach; ?>
					
				</div>
			
			</div>
	
		</div>
	</div>
</div>