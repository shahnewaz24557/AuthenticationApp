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


<div class="row text-center">

		<div class="col-md-12">

			<h5><strong><?php echo $user['name']; ?></strong></h5>
			<p><strong>Phone: </strong><?php echo $user['phone']; ?></p>
			<p><strong>Email: </strong><?php echo $user['email']; ?></p>
			<p><strong>Gender: </strong><?php echo $user['gender']; ?></p>

			<div class="float-right">
				<a href="<?php echo base_url(); ?>HomeController/profile_edit" class="btn btn-default">Edit Profile</a>
			</div>

		</div>
</div>
