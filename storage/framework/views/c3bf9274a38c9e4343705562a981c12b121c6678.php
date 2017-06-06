<?php $__env->startSection('content'); ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<p>Completed Todos</p>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>
						Completed Todos
					</th>

					<th>
						Mark as Uncompleted
					</th>

					<th>
						Delete
					</th>

				</thead>
				<tbody>

					<?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<?php if($todos->user_id === Auth::user()->id): ?>
							<tr>
								<td>
									<?php echo e($todos->todo); ?>

								</td>
								<td>
									<a href="<?php echo e(route('make.uncompleted', ['id' => $todos->id])); ?>" class="btn btn-primary">Mark Uncompleted</a>
								</td>
								<td>
									<a href="<?php echo e(route('todo.delete', ['id' => $todos->id])); ?>" class="btn btn-danger">Trash</a>
								</td>
							</tr>
						<?php endif; ?>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>