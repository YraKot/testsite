<?php $__env->startSection('content'); ?>
  <div class="singleService">
    <h2 class="singleService-title"><?php echo get_the_title(); ?></h2>
    <ul class="singleService-features features">
      <?php $__currentLoopData = $top_bar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="features-item"><?php echo e($text->title); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="singleService-product product-wrp">
      <div class="product"></div>
      <div class="product-info"><?php echo the_field('decritption_with_price_usluga',$post); ?></div>
      <div class="product-include">
        <p><?php echo pll_e('В стоимость входит:','sage'); ?></p>
        <ul>
          <?php $__currentLoopData = $first_section_ul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($text->title); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

    <div class="singleService-howtoBuy howtoBuy">
      <h2 class="howtoBuy-title"><?php echo the_field('title_scetion_second_usluga',$post); ?></h2>
      <p class="howtoBuy-text"><?php echo the_field('description_scetion_second_usluga',$post); ?></p>

      <h4 class="howtoBuy-subtitle"><?php echo the_field('text_before_list_specialnosti_usluga',$post); ?></h4>
      <ul class="howtoBuy-list">
        <?php $__currentLoopData = $list_specialnost_usluga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="howtoBuy-item"><?php echo e($text->title); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>

    <div class="singleService-howMuch howMuch">
      <h2 class="howMuch-title"><?php echo the_field('title_section_third_usluga',$post); ?></h2>
      <div class="howMuch-text"><?php echo the_field('description_section_third_usluga',$post); ?></div>
    </div>

    <div class="singleService-whtaInclude whtaInclude">
      <h2 class="whtaInclude-title"><?php echo the_field('title_section_fourth_usluga',$post); ?></h2>
      <div class="whtaInclude-text"><?php echo the_field('description_section_fourth_usluga',$post); ?></div>
      <h3 class="whtaInclude-subtitle"><?php echo the_field('title_section_fifth_usluga',$post); ?></h3>
       <ul class="whtaInclude-list">
         <?php $__currentLoopData = $list_garant_usluga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="whtaInclude-item">
           <h4 class="whtaInclude-itemTitle"><?php echo e($content->title); ?></h4>
           <p class="whtaInclude-itemText"><?php echo e($content->description); ?></p>
         </li>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>

    <div class="singleService-callUs callUs">
       <h2 class="callUs-title"></h2>
        <p class="callUs-text"></p>
    </div>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>