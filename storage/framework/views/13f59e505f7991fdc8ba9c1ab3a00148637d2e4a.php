<?php $__env->startSection('content'); ?>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Register</h3>
			</div>
			<div class="panel-body">
				<form class="form-vertical" role="form" method="post" enctype="multipart/form-data" action="<?php echo e(route('user.register')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
					<label for="name" class="control-label">Your Name</label>
					<input type="text" name="name" class="form-control" id="name" value="<?php echo e(Request::old('name') ?: ''); ?>">

					<?php if($errors->has('name')): ?>
						<span class="help-block"><?php echo e($errors->first('name')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
					<label for="email" class="control-label">Your email Address</label>
					<input type="text" name="email" class="form-control" id="email" value="<?php echo e(Request::old('email') ?: ''); ?>">

					<?php if($errors->has('email')): ?>
						<span class="help-block"><?php echo e($errors->first('email')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
					<label for="username" class="control-label">Choose a Username</label>
					<input type="text" name="username" class="form-control" id="username" value="<?php echo e(Request::old('username') ?: ''); ?>">

					<?php if($errors->has('username')): ?>
						<span class="help-block"><?php echo e($errors->first('username')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
					<label for="password" class="control-label">Choose a Password</label>
					<input type="password" name="password" class="form-control" id="password" value="">

					<?php if($errors->has('password')): ?>
						<span class="help-block"><?php echo e($errors->first('password')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group<?php echo e($errors->has('profile') ? ' has-error' : ''); ?>">
					<label for="profile" class="control-label">Choose a Profile Image</label>
					<input type="file" name="profile" class="form-control" value="<?php echo e(Request::old('profile')); ?>">

					<?php if($errors->has('profile')): ?>
						<span class="help-block"><?php echo e($errors->first('profile')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Register</button>
					<a href="<?php echo e(route('login')); ?>">Already have an account</a>
				</div>
				
			</form>
			</div>
		</div>
			

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>