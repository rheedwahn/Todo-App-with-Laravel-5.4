<?php $__env->startSection('content'); ?>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Login</h3>
			</div>
			<div class="panel-body">
				<form class="form-vertical" role="form" method="post" action="<?php echo e(route('user.login')); ?>">
				<?php echo e(csrf_field()); ?>

				<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
					<label for="email" class="control-label">Email Address</label>
					<input type="text" name="email" class="form-control" id="email" value="">

					<?php if($errors->has('email')): ?>
						<span class="help-block"><?php echo e($errors->first('email')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
					<label for="password" class="control-label">Password</label>
					<input type="password" name="password" class="form-control" id="password" value="">

					<?php if($errors->has('password')): ?>
						<span class="help-block"><?php echo e($errors->first('password')); ?></span>
					<?php endif; ?>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember">Remember me
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Sign in</button>
					<a href="<?php echo e(route('register')); ?>">Not a registered User?</a>
				</div>
				
			</form>
			</div>
		</div>
			

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>