<div class="container-fliud">
	<div class="col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-lg-4 col-md-6 col-sm-8">

		<div class="panel panel-primary" style="margin-top: 50px;">
			<div class="panel-heading">
				<h2 class="text-center">Signup Form</h2>
			</div>
			<div class="panel-body" style="margin-right: 15px; margin-left: 15px;">
				<?php echo $this->session->flashdata('message'); ?>

				<?php echo form_open("registration", array("class" => "form-horizontal", "role" => "form")); ?>
                    <div class="form-group">
                        <label for="name"><strong>Name:</strong></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
                        <span class="text-danger"><?php echo form_error('name'); ?></span>
                    </div>
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
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" >
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>

                    <div class="form-group">
						<label for="con_password"><strong>Confirm Password:</strong></label>
						<input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirm Password" autocomplete="off">
						<span class="text-danger"><?php echo form_error('con_password'); ?></span>
					</div>

					<div class="form-group">
						<label for="email"><strong>Email:</strong></label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>

                    <div class="form-group">
                        <label for="gender"><strong>Gender:</strong></label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="select">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

					<div class="form-group">
						<input type="submit" class="form-control btn btn-success col-md-12" value="Signup" style="margin: 15px 0;">
						<a href="<?php echo base_url(); ?>login" class="col-md-12 btn btn-default" style="margin: 15px 0;">Login</a>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
