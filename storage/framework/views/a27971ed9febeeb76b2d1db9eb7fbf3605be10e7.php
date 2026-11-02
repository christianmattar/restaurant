<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-md-8">
        <i class="fas fa-hamburger"></i>Menu
        <a href="/management/menu/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Create Menu</a>
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

              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Picture</th>
              <th scope="col">Description</th>
              <th scope="col">Category</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>

                <td><?php echo e($menu->name); ?></td>
                <td><?php echo e($menu->price); ?></td>
                <td>
                  <img src="<?php echo e(asset('menu_images')); ?>/<?php echo e($menu->image); ?>" alt="<?php echo e($menu->name); ?>" width="120px" height="120px" >
                </td>
                <td><?php echo e($menu->description); ?></td>
                <td><?php echo e($menu->category->name); ?></td>
                <td><a href="/management/menu/<?php echo e($menu->id); ?>/edit" class="btn btn-warning">Edit</a></td>
                <td>
                  <form action="/management/menu/<?php echo e($menu->id); ?>" method="post">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/menu.blade.php ENDPATH**/ ?>