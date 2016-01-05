<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/contact.js"></script>
<div class="main_container">
	<div class="container-fluid text-left">
		<h2 class="p_title">CONTACT US</h2><br><br>
		<div class="row">
			<div class="col-sm-6" style="text-align:left;">
				<p class="p_text">
					<?PHP echo $article['description']; ?>
				</p>
				<ul class='contact_form' >
				<?php // echo form_open(base_url().'index.php/contact_form'); ?>
				<form id="form1" class="form1">
				<div class="row">
				
					<div class="col-sm-6 form-group">
					  <input class="form-control" id="first_name" name="first_name" placeholder="First Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
					  <input class="form-control" id="last_name" name="last_name" placeholder="Last Name" type="text" required>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form-group">
					  <input class="form-control" id="phone" name="phone" placeholder="Contact Number" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
					  <input class="form-control" id="email" name="email" placeholder="Email" type="text" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group" style="color:red;" id="form_error">
					</div>
					<div class="col-sm-12 form-group" style="color:green;" id="form_sucess">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 form-group">
					  <button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
			<?PHP //echo form_close(); ?>
			</form>
			</ul>
			<div style="height:20px;"></div>
			<div class="col-sm-6" style="text-align:left;">
				<img  src="<?php echo base_url(); ?>assets/images/contact.jpg" class="img-responsive" style="max-width:100%; margin-right:auto; margin-left:auto;" alt="Image">
			</div>
		</div>
	</div>
</div>