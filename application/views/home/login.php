<div class="container-fliud">
	<div class="col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-lg-4 col-md-6 col-sm-8">

		<div class="panel panel-primary"  style="margin-top: 50px;">
			<div class="panel-heading">
				<h2 class="text-center">Login Form</h2>
			</div>
			<div class="panel-body" style="margin-right: 15px; margin-left: 15px;">
				<?php echo $this->session->flashdata('message'); ?>

				<?php echo form_open("check_user", array("class" => "form-horizontal", "role" => "form")); ?>
					<div class="form-group">
						 <label for="phone"><strong>Phone:</strong></label>
						 <div class="input-group">
							 <div class="input-group-addon">
								 <b>+88</b>
							 </div>
							 <input type="text" class="form-control" id="phone" name="phone"
							 	title="Number Without Country Code"
								value="<?php echo set_value('phone'); ?>"
								placeholder="e.g. 01712074312">
						</div>
						<span class="text-danger"><?php echo form_error('phone'); ?></span>
					</div>
					<div class="form-group">
						<label for="password"><strong>Password:</strong></label>
						<div class="input-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
							<div class="input-group-btn">
								<button tabindex="-1" class="btn btn-default" onclick="showPassword()" type="button" title="Show Password"><span class="glyphicon glyphicon-eye-open"></span></button>
							</div>
						</div>
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>
					
					<div class="form-group">
						<input type="submit" class="form-control btn btn-success col-md-12" value="Login" style="margin: 15px 0;">
						<a href="<?php echo base_url(); ?>forgot_password" class="col-md-12 btn btn-default" style="margin: 15px 0;">Forgot password?</a>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
