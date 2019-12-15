<?php $__env->startSection('content'); ?>
  <?php
  $frontpage = \App\Controllers\FrontPage;
  echo $frontpage->the_custom_content();
  ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>