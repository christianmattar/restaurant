<?php $__env->startSection('content'); ?>
    <div class="container">
  <div class="row justify-content-center">
    <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-md-8">
          <i class="fa-solid fa-chair"></i>Table
        <a href="/management/table/create" class="btn btn-success btn-sm float-right"><i class='fas fa-plus'> </i> Create Table </a>
        <hr>
        <?php if(Session()->has('status')): ?>
          <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <?php echo e(Session()->get('status')); ?>

          </div>

        <?php endif; ?>
        <table class="table table-bordered">
          <thead>
            <tr>

              <th scope="col">Table</th>
              <th scope="col">Status</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

              <td><?php echo e($table->name); ?></td>
              <td><?php echo e($table->status); ?></td>
              <td>
                <a href="/management/table/<?php echo e($table->id); ?>/edit" class="btn btn-warning">Edit</a>
              </td>
              <td>
                <form action="/management/table/<?php echo e($table->id); ?>" method="post">
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/table.blade.php ENDPATH**/ ?>