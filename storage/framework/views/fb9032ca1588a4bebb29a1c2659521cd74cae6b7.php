<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <?php echo $__env->make('management.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-md-8">
        <i class="fas fa-hamburger"></i>Create a Menu
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
        <form action="/management/menu" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="menuName">Menu Name</label>
            <input type="text" name="name" class="form-control" placeholder="Menu...">
          </div>
          <label for="menuPrice">Price</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollor)">
            <div class="input-group-append">
            <span class="input-group-text">.00</span>
            </div>
          </div>
          <label for="MenuImage">Image</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
            </div>
          </div>

          <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description...">
          </div>

          <div class="form-group">
            <label for="Category">Category</label>
            <select class="form-control" name="category_id">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/management/createMenu.blade.php ENDPATH**/ ?>