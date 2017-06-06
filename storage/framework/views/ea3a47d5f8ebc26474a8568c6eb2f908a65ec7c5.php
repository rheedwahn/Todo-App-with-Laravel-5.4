<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if(Auth::check()): ?>
        <a class="navbar-brand" href="<?php echo e(route('todo.home')); ?>">Todo App</a>
      <?php else: ?>
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Todo App</a>
      <?php endif; ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
     <ul class="nav navbar-nav">
      <?php if(Auth::check()): ?> 
        <li><a href="<?php echo e(route('todo.home')); ?>">Home</a></li>
        <li><a href="<?php echo e(route('todo.create')); ?>">Create Todo</a></li>
        <li><a href="<?php echo e(route('todos')); ?>">All Todos</a></li> 
        <li><a href="<?php echo e(route('completed')); ?>">Completed Todos</a></li> 
        <li><a href="<?php echo e(route('todo.trash')); ?>">Trashed Todos</a></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->username); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(route('user.logout')); ?>">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
      <?php endif; ?> 
     </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>