<?php $__env->startSection('content'); ?>
  <div class="container custom-page">
    <h1><?php echo pll_e('Условия','sage'); ?></h1>
    <div class="content_uslovia">
      <?php echo wp_specialchars_decode(get_field('условия',$post),'sage'); ?>

    </div>
    <button class="btn button button-red"><?php echo pll_e('СКАЧАТЬ ШАБЛОН ДОГОВОРА','sage'); ?></button>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>