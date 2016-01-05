<div class="main_container">
	<div class="container-fluid text-left">
		<h2 class="p_title">OUR WORK</h2><br><br>
		
		<div class="row">
			<div class="col-sm-3" style="text-align:left;">
			<?php $this->view('catalog/menu.php'); ?>
			
			<div style="height:20px;"></div>
			</div>
			<div class="col-sm-9 text-center" style="">
				<h4 class="p_sub_title"><?php echo $category_info['title']; ?></h4><br><br>
				<div class="row text-center">
					<div id="results">
					
					</div>
					<div id=loading_data style="text-align:center;"><img src="<?php echo base_url(); ?>assets/images/loading_spinner.gif"></div>
				</div>
			
			</div>
	
		</div>
	</div>
</div>
<script type="text/javascript">
var total_groups = <?php echo $total_groups; ?>;  
var cat_id0 = <?php echo $category_info['cat_id']; ?>;
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/catalog.js"></script>