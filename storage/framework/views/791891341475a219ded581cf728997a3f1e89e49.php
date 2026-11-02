<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-md-8">
        <i class="fas fa-users"></i> User
        <a href="/management/user/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create User</a>
        <hr>
        <?php if(Session()->has('status')): ?>
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <?php echo e(Session()->get('status')); ?>

          </div>
        <?php endif; ?>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Role</th>
              <th scope="col">Email</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->role); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><a href="/management/user/<?php echo e($user->id); ?>/edit" class="btn btn-warning">Edit</a></td>
                <td>
                  <form action="/management/user/<?php echo e($user->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </form>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/user.blade.php ENDPATH**/ ?>