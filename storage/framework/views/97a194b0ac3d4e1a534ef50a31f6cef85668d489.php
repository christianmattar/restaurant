<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
        <?php endif; ?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Main Functions</a></li>
            <li class="breadcrumb-item"><a href="/report">Report</a></li>
            <li class="breadcrumb-item active" aria-current="page">Result</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <?php if($sales->count() > 0): ?>
            <div class="alert alert-success" role="alert">
              <p>The Total Amount of Sale from <?php echo e($dateStart); ?> to <?php echo e($dateEnd); ?> is $<?php echo e(number_format($totalSale, 2)); ?></p>
              <p>Total Result: <?php echo e($sales->total()); ?></p>
            </div>
            <table class="table">
              <thead>
                <tr class="bg-primary text-light">
                  <th scope="col">#</th>
                  <th scope="col">Receipt ID</th>
                  <th scope="col">Date Time</th>
                  <th scope="col">Table</th>
                  <th scope="col">Staff</th>
                  <th scope="col">Total Amount</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $countSale = ($sales->currentPage() - 1) * $sales->perPage() + 1;
                ?>
                <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr class="bg-primary text-light">
                    <td><?php echo e($countSale++); ?></td>
                    <td><?php echo e($sale->id); ?></td>
                    <td><?php echo e(date("m/d/Y H:i:s", strtotime($sale->updated_at))); ?></td>
                    <td><?php echo e($sale->table_name); ?></td>
                    <td><?php echo e($sale->user_name); ?></td>
                    <td><?php echo e($sale->total_price); ?></td>
                  </tr>
                  <tr >
                    <th></th>
                    <th>Menu ID</th>
                    <th>Menu</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                  </tr>
                  <?php $__currentLoopData = $sale->saleDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td></td>
                      <td><?php echo e($saleDetail->menu_id); ?></td>
                      <td><?php echo e($saleDetail->menu_name); ?></td>
                      <td><?php echo e($saleDetail->quantity); ?></td>
                      <td><?php echo e($saleDetail->menu_price); ?></td>
                      <td><?php echo e($saleDetail->menu_price * $saleDetail->quantity); ?></td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>

            <?php echo e($sales->appends($_GET)->links()); ?>


            <form action="/report/show/export" method="get">
              <input type="hidden" name="dateStart" value="<?php echo e($dateStart); ?>" >
              <input type="hidden" name="dateEnd" value="<?php echo e($dateEnd); ?>" >
              <input type="submit" class="btn btn-warning" value="Export to Excel" >
            </form>

          <?php else: ?>
            <div class="alert alert-danger" role="alert">
              There is no Sale Report
            </div>
          <?php endif; ?>
        </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/report/showReport.blade.php ENDPATH**/ ?>