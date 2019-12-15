<?php $__env->startSection('content'); ?>
<div class="oplata_i_garantii">
  <div class="container">
    <h1><?php echo pll_e('Оплата и гарантия','sage'); ?></h1>
    <div class="first_section">
      <h3 class="title_section"><?php echo the_field('title_first_section_Oplata',$post); ?></h3>
      <div class="row">
        <?php $__currentLoopData = $block_first_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="block">
              <p class="title_block"><?php echo e($block->title); ?></p>
              <p class="description"><?php echo e($block->description); ?> </p>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="col-md-8 mx-auto">
        <p class="bottom_text"><?php echo the_field('bottom_text_first_section',$post); ?></p>
      </div>
    </div>
  </div>
  <div class="second-section">
    <div class="container">
      <h3 class="title_section"><?php echo the_field('title_second_section_Oplata',$post); ?></h3>
      <p><?php echo the_field('sub_title_second_section_Oplata',$post); ?></p>
      <div class="row two_columns">
        <?php $__currentLoopData = $block_second_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 second_block">
          <p class="title_smal">
            <?php echo e($block->title); ?>

          </p>
          <?php echo wp_specialchars_decode($block->description,'sage'); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="block_bottom_text">
        <p class="title_smal"><?php echo the_field('title_last_block_second_section_Oplata',$post); ?></p>
        <?php echo the_field('description_last_block_second_section_Oplata',$post); ?>

      </div>
    </div>
  </div>
  <div class="third-section">
    <h3 class="title_section"><?php echo the_field('title_third_section_Oplata',$post); ?></h3>
    <div class="numbers_block">
      <div class="container">
        <div class="row">
          <?php $__currentLoopData = $numbers_block; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4 col-12 number_block">
            <p class="title"><?php echo e($block->title); ?></p>
            <p class="description"><?php echo e($block->description); ?></p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
    <div class="questions">
      <h3 class="title_section text-center"><?php echo the_field('title_section_questions_Oplata',$post); ?></h3>
      <div class="container">
        <div class="questions_blocks col-md-10 col-12 mx-auto">
        <?php $__currentLoopData = $questions_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="question">
            <div class="title_block">
              <p class="title_question"><?php echo e($question->title); ?></p>
            </div>
            <div class="content_question_block">
              <?php echo wp_specialchars_decode($question->description,'sage'); ?>

            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
    <button class="btn button-red" data-toggle="modal" data-target="#modalQuestion"><?php echo pll_e('ЗАДАТЬ ВОПРОС','sage'); ?></button>
  </div>
</div>
  <?php echo $__env->make('partials.modal-question', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>