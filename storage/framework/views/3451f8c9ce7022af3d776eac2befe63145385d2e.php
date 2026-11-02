<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-md-8">
        <i class="fas fa-user"></i>Edit a User
        <hr>
        <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
        <?php endif; ?>
        <form action="/management/user/<?php echo e($user->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control" placeholder="Name...">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" placeholder="Email...">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password...">
          </div>
          <div class="form-group">
            <label for="Role">Role</label>
            <select name="role" class="form-control">
              <option value="admin" <?php echo e($user->role == 'admin' ? 'selected':''); ?>>Admin</option>
              <option value="cashier" <?php echo e($user->role == 'cashier' ? 'selected':''); ?>>Cashier</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/editUser.blade.php ENDPATH**/ ?>