<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Main Functions</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   <div class="row text-center">
                    <?php if(Auth::user()->checkAdmin()): ?>
                      <div class="col-sm-4">
                          <a href="/management" style="text-decoration:none">
                                    <h4>Managment</h4>
                                    <img width="50px" src="<?php echo e(asset('img/managment.png')); ?>"/>
                          </a>
                        </div>
                        <?php endif; ?>
                      <div class="col-sm-4">
                          <a href="/cashier" style="text-decoration:none">
                            <h4>Cashier</h4>
                            <img width="50px" src="<?php echo e(asset('img/cashier-machine.png')); ?>"/>
                          </a>
                      </div>
                      <?php if(Auth::user()->checkAdmin()): ?>
                        <div class="col-sm-4">
                              <a href="/report" style="text-decoration:none">
                                <h4>Report</h4>
                                 <img width="50px" src="<?php echo e(asset('img/report.png')); ?>"/>
                              </a>
                      </div>
                      <?php endif; ?>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/home.blade.php ENDPATH**/ ?>