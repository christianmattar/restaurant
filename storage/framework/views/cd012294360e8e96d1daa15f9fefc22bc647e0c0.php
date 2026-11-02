<?php $__env->startSection('content'); ?>
    <div class="container">
     <div class="row justify-content-center">
        <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-8">
          <i class="fa-solid fa-chair"></i> Edit a Table
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
        <form action="/management/table/<?php echo e($table->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="categoryName">Table Name</label>
            <input type="text" name="name" class="form-control" placeholder="Table...">
          </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>

     </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/editTable.blade.php ENDPATH**/ ?>