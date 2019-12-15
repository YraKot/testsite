<?php $__env->startSection('content'); ?>
  <div class="container custom-page">
    <h1><?php echo pll_e('Отзывы','sage'); ?></h1>

    <div class="slider-reviews">
      <?php $__currentLoopData = $comments_real; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="review">
        <div class="top-block">
          <img src="<?= App\asset_path('images/reviewth_char.png'); ?>" alt="">
          <img src="<?= App\asset_path('images/reviewth_char.png'); ?>" alt="">
        </div>
        <div class="content-block">
          <p class="name"><?php echo e($comment->name); ?></p>
          <p class="date"><?php echo e($comment->date); ?></p>
          <p class="content-review">
            <?php echo e($comment->content); ?>

          </p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button class="btn button-red p-3 "  data-toggle="modal" data-target="#modalReview"><?php echo pll_e('ДОБАВИТЬ ОТЗЫВ','sage'); ?></button>
    <?php echo $__env->make('partials.modal-review', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
  <div class="reviews_users ">
    <h3 class="text-center title_section"><?php echo pll_e('Фото отзывы','sage'); ?></h3>
    <div class="carousel slick-carousel photo-carousel">
      
      <?php $__currentLoopData = $reviews_photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="img-review">
          <div class="layer"></div>
          <img class="slick-img img-responsive" src="<?php echo e($img->url); ?>" alt="<?php echo e($img->name); ?>">
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>