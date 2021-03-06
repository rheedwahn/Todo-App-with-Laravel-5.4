<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
    	<div class="panel-heading">
    		<h3>Application Summary</h3>
    	</div>
    	<div class="panel-body">
    		<ul class="list-group">
			  <li class="list-group-item">All Todos <span class="badge"><?php echo e($todo->count()); ?></span></li>
			  <li class="list-group-item">Completed Todos <span class="badge"><?php echo e($todocomplete->count()); ?></span></li>
			  <li class="list-group-item">Uncompleted Todo <span class="badge"><?php echo e($todouncompleted->count()); ?></span></li>
			  <li class="list-group-item">Trashed Todo <span class="badge"><?php echo e($todotrashed->count()); ?></span></li>
			</ul>
    	</div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>