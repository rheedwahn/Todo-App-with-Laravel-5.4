<?php $__env->startSection('content'); ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<p>Edit Todo: <?php echo e($todo->todo); ?></p>
		</div>
		<div class="panel-body">
			<form action="<?php echo e(route('todo.update', ['id' => $todo->id])); ?>" method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="form-group <?php echo e($errors->has('todo') ? ' has-error' : ''); ?>">
					<label for="todo">Edit your Todo</label>
					<input type="text" name="todo" value="<?php echo e($todo->todo); ?>" class="form-control"></input>

					<?php if($errors->has('todo')): ?>
						<span class="help-block"><?php echo e($errors->first('todo')); ?></span>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Update Todo</button>
				</div>
			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>