<?php $__env->startSection('content'); ?>
    <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="list-group">
            <a href="/management/category" class="list-group-item list-group-item-action"><i class="fa-solid fa-bars"></i>   Catagory</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-burger"></i>   Menu</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-chair"></i>   Table</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-user"></i>   User</a>

          </div>
        </div>
        <div class="col-md-8">
          <i class="fa-solid fa-bars"></i>Create a Category
          <hr>
          <?php if($errors->any()): ?>
            <div class="alert alert-danger" role="alert">
              <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($errors); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
              </div>


          <?php endif; ?>
          <form action="/management/category/<?php echo e($category->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="from-group">
                <label for="categoryname">Category Name</label>
                <input type="text" name="name" value="<?php echo e($category->name); ?>"
                class="form=control" placeholder="Category...">
             </div>
             <button type="sumbit" class="btn btn-primary">Update</button>
          </form>
        </div>

     </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/editCategory.blade.php ENDPATH**/ ?>