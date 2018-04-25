<div class="row">
    <div class="col-md-12">
		<?php if(isset($success)) { ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p><?php echo $success; ?></p>
			</div>
		<?php } ?>
	</div>
</div>


<div class="row">

		<div class="col-md-offset-4 col-md-4">

			<?php echo form_open("profile_edit", array("class" => "form-horizontal", "role" => "form")); ?>
					<div class="form-group">
						 <label for="name"><strong>Name:</strong></label>
						 <div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-user">
							 </div>
							 <input type="text" class="form-control" id="name" name="name"
							 	value="<?php echo $user['name']; ?>"
								placeholder="e.g. Name">
						</div>
						<span class="text-danger"><?php echo form_error('name'); ?></span>
					</div>
					<div class="form-group">
						 <label for="phone"><strong>Phone:</strong></label>
						 <div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-phone">
							 </div>
							 <input type="text" class="form-control" id="phone" name="phone"
							 	value="<?php echo $user['phone']; ?>"
								placeholder="e.g. 01738521777">
						</div>
						<span class="text-danger"><?php echo form_error('phone'); ?></span>
					</div>
					<div class="form-group">
						 <label for="phone"><strong>Email:</strong></label>
						 <div class="input-group">
							 <div class="input-group-addon">
								 <span class="glyphicon glyphicon-envelop">
							 </div>
							 <input type="text" class="form-control" id="email" name="email"
							 	value="<?php echo $user['email']; ?>"
								placeholder="e.g. Email">
						</div>
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>
					<div class="form-group">
						<label for="password"><strong>Password:</strong></label>
						<input type="text" class="form-control" id="password" value="<?php echo $user['password']; ?>" name="password" placeholder="Password">
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>
					
					<div class="form-group">
						<input type="submit" class="form-control btn btn-success col-md-12" value="Update" style="margin: 15px 0;">
					</div>
				<?php echo form_close(); ?>
		</div>
</div>
