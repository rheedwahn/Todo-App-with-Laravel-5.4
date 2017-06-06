<?php $__env->startSection('content'); ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<p>All Todos</p>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>
						Todos
					</th>

					<th>
						Edit
					</th>

					<th>
						Mark as Completed
					</th>

					<th>
						Trash
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
									<a href="<?php echo e(route('todo.edit', ['id'=>$todos->id])); ?>" class="btn btn-primary">Edit</a>
								</td>
								<td>
									<?php if(!$todos->completed): ?>
										<a href="<?php echo e(route('todo.completed', ['id'=>$todos->id])); ?>" class="btn btn-success">Mark Completed</a>
									<?php else: ?>
										<p>Completed <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></button></p>
									<?php endif; ?>
								</td>
								<td>
									<a href="<?php echo e(route('todo.delete', ['id'=>$todos->id])); ?>" class="btn btn-danger">Trash</a>
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