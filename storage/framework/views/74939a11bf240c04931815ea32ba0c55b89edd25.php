<table>
    <thead>
      <tr>
        <th>#</th>
        <th>Receipt ID</th>
        <th>Date Time</th>
        <th>Table</th>
        <th>Staff</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $countSale = 1;
      ?>
      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
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
      <tr>
        <td colspan="5">Total Amount from <?php echo e($dateStart); ?> to <?php echo e($dateEnd); ?></td>
        <td><?php echo e(number_format($totalSale, 2)); ?></td>
      </tr>
    </tbody>
  </table>
<?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/exports/salereport.blade.php ENDPATH**/ ?>