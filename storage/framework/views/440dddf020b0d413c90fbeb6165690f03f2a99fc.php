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
            <li class="breadcrumb-item active" aria-current="page">Report</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <form action="/report/show" method="GET">
        <div class="col-md-12">
        <label>Choose Date For Report</label>
          <div class="form-group">
            <div class="input-group date" id="date-start" data-target-input="nearest">
                  <input type="text" name="dateStart" class="form-control datetimepicker-input" data-target="#date-start"/>
                  <div class="input-group-append" data-target="#date-start" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>

          <div class="form-group">
           <div class="input-group date" id="date-end" data-target-input="nearest">
                <input type="text" name="dateEnd" class="form-control datetimepicker-input" data-target="#date-end"/>
                <div class="input-group-append" data-target="#date-end" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
          <input class="btn btn-primary" type="submit" value="Show Report">

        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
      $(function () {
          $('#date-start').datetimepicker({
            format : 'L'
          });
          $('#date-end').datetimepicker({
              format : 'L',
              useCurrent: false
          });
          $("#date-start").on("change.datetimepicker", function (e) {
              $('#date-end').datetimepicker('minDate', e.date);
          });
          $("#date-end").on("change.datetimepicker", function (e) {
              $('#date-start').datetimepicker('maxDate', e.date);
          });
      });
  </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restaurant\restaurant\resources\views/report/index.blade.php ENDPATH**/ ?>