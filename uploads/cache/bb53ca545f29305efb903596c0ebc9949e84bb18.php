<?php $__env->startSection('content'); ?>
  <div class="container">
    <h1><?php echo pll_e('Услуги','sage'); ?></h1>
  </div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="one_cat  <?php echo e($cat['class']); ?>" style="background-image: url(<?php echo e($cat['img_bg']); ?>)">
        <h3 class="title_cat"><?php echo e($cat['title']); ?></h3>
          <div class="container">
          <div class="row">
          <?php $__currentLoopData = $cat['posts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
              <div class="usluga">
                <div class="img-block">
                  <img src="<?php echo $post_cat->img; ?>" alt="<?php echo $post_cat->title; ?>">
                </div>
                <div class="content-block">
                  <p class="title"><?php echo $post_cat->title; ?></p>
                  <p class="price"><?php echo $post_cat->price; ?></p>
                  <div class="buttons_block">
                    <button class="btn order"><?php _e('Заказать'); ?></button>
                    <button class="btn view">
                      <a href="<?php echo $post_cat->link; ?>">
                        <img src="<?= App\asset_path('images/eye.png'); ?>" alt="oko">
                      </a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>