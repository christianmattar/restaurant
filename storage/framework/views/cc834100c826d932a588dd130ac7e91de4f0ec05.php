<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restuarnt App - Receipt - SaleID : <?php echo e($sale->id); ?></title>
  <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/receipt.css')); ?>" media="all" >
  <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/no-print.css')); ?>" media="print" >
</head>
<body>
  <div id="wrapper">
    <div id="receipt-header">
      <h3 id="resturant-name">Resturant App Devtamin</h3>
      <p>Address: 341 N Israel Ave</p>
      <p>Haifa, MD 1234</p>
      <p>Tel: 04-XXXX-XXXX</p>
      <p>Reference Receipt: <strong><?php echo e($sale->id); ?></strong></p>
    </div>
    <div id="receipt-body">
      <table class="tb-sale-detail">
        <thead>
          <tr>
            <th>#</th>
            <th>Menu</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $saleDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td width="30"><?php echo e($saleDetail->menu_id); ?></td>
              <td width="180"><?php echo e($saleDetail->menu_name); ?></td>
              <td width="50"><?php echo e($saleDetail->quantity); ?></td>
              <td width="55"><?php echo e($saleDetail->menu_price); ?></td>
              <td width="65"><?php echo e($saleDetail->menu_price * $saleDetail->quantity); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <table class="tb-sale-total">
        <tbody>
          <tr>
            <td>Total Quantity</td>
            <td><?php echo e($saleDetails->count()); ?></td>
            <td>Total</td>
            <td>$<?php echo e(number_format($sale->total_price, 2)); ?></td>
          </tr>
          <tr>
            <td colspan="2">Payment Type</td>
            <td colspan="2"><?php echo e($sale->payment_type); ?></td>
          </tr>
          <tr>
            <td colspan="2">Paid Amount</td>
            <td colspan="2">$<?php echo e(number_format($sale->total_recieved, 2)); ?></td>
          </tr>
          <tr>
            <td colspan="2">Change</td>
            <td colspan="2">$<?php echo e(number_format($sale->change, 2)); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="receipt-footer">
      <p>Thank You!!!</p>
    </div>
    <div id="buttons">
      <a href="/cashier">
        <button class="btn btn-back">
          Back to Cashier
        </button>
      </a>
      <button class="btn btn-print" type="button" onclick="window.print(); return false;">
        Print
      </button>
    </div>
  </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/cashier/showReceipt.blade.php ENDPATH**/ ?>