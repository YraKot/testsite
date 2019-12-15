<?php $__env->startSection('content'); ?>
  <div class="banner-home" style="background-image: url('<?php the_field('banner_home_bg',$post) ?>')">
    <div class="banner-home_container"> 

        <div class="banner-home_title">
          <h1><?php the_field('title_banner_home',$post) ?></h1>
          <button class="btn button"><?php the_field('text_in_button_front_page',$post) ?></button>
        </div>
        <div class="banner-home_contact">
          <div class="content-block">
            <?php
              if( have_rows('phones_repeater','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/phones_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('phones_repeater','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('value')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            if( have_rows('emails','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/email_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('emails','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('email')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            if( have_rows('addresses','options') ):

                echo '<div class="phones values">';
                echo '<img src="'.get_template_directory_uri().'/assets/images/address_icon.png">';
                echo '<ul>';

                 // loop through the rows of data
                  while ( have_rows('addresses','options') ) : the_row();

                      // display a sub field value
                     echo "<li>".get_sub_field('address')."</li>";

                  endwhile;
                  echo '</ul></div>';
              endif;

            ?>
          </div>
        </div>
      
    </div>
  </div>
  <div class="uslugi container">
    <h3><?php echo pll_e('Топ услуги','sage'); ?></h3>
    <div class="contents col-md-9 mx-auto">
        <div class="row">
          <?php $__currentLoopData = $uslugi_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usluga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="usluga">
            <div class="img-block">
              <img src="<?php echo $usluga->img; ?>" alt="<?php echo $usluga->title; ?>">
            </div>
            <div class="content-block">
              <p class="title"><?php echo $usluga->title; ?></p>
              <p class="price"><?php echo $usluga->price; ?></p>
              <div class="buttons_block">
                <button class="btn order"><?php _e('Заказать'); ?></button>
                <button class="btn view">
                  <a href="<?php echo $usluga->link; ?>">
                    <img src="<?= App\asset_path('images/eye.png'); ?>" alt="oko">
                  </a>
                </button>
              </div>
            </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <button class="btn review-all"><a href="<?php echo e($link_to_archive_page); ?>"><?php echo the_field('text_button_home_uslugiLayer',$post); ?></a></button>
    </div>
  </div>
  <div class="zaboti_studentov how-works">
    <div class="first-block f-b how-works_item" style="background-image: url(<?= App\asset_path('images/bg_third_section.png'); ?>);">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-md-5">
            <p class="title text"><?php echo the_field('text_left_column_third_section',$post); ?></p>
          </div>
          <div class="col col-md-5 offset-md-2">
            <p class="text"><?php echo the_field('text_right_column_third_section',$post); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="second-block f-b how-works_item" style="background-image: url(<?= App\asset_path('images/bg_third_section_two.png'); ?>);">
      <div class="container">
        <h3 class="text-center"><?php echo the_field('title_second_block_third_section',$post); ?></h3>
        <div class="row">
          <?php $__currentLoopData = $how_we_works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col col-12 col-md-4 ">
            <p class="title"><?php echo e($block->title); ?></p>
            <p class="description"><?php echo e($block->description); ?></p>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="why-us">
    <div class="container-fluid">
      <h3 class="text-center title_section"><?php echo pll_e('Почему нас выбирают'); ?></h3>
      
        <div class="row">
          <div class="why-us_list">
            <?php $__currentLoopData = $why_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="why-us_item">
                <div class="img-block">
                  <img src="<?php echo $block->img; ?>" alt="<?php echo $block->title; ?>">
                </div>
                <div class="content">
                  <p class="title-block"><?php echo $block->title; ?></p>
                  <p class="description"><?php echo $block->description; ?></p>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      
    </div>
  </div>

  <div class="whate_we_gift" style="background-image: url('<?php echo the_field("bg_fifth_section",$post); ?>')">
    <div class="container-fluid">
      <h3 class="text-center title_section"><?php echo pll_e('Что мы даем клиентам'); ?></h3>
        <div class="row">
          <div class="gift-list">
            <?php $__currentLoopData = $what_me_gift; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="gift-block no-bg">
                <div class="img-block">
                  <img src="<?php echo $block->img; ?>" alt="<?php echo $block->title; ?>">
                </div>
                <div class="gift-content">
                  <p class="gift-title"><?php echo $block->title; ?></p>
                  <p class="gift-description"><?php echo $block->description; ?></p>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="gift-section" style="background-image: url('<?php echo the_field("bg_sixth_section",$post); ?>')">
    <div class="container">
      <div class="row">
        <div class="img-gift">
          <img src="<?= App\asset_path('images/gift.png'); ?>" alt="gift">
        </div>
        <div class="text-block">
          <p class="text_sixth_section"><?php echo the_field('fisrt_row_text',$post); ?></p>
          <p class="text_sixth_section white"><?php echo the_field('second_row_text',$post); ?></p>
        </div>
        <div class="button-block">
          <button class="btn button">
            <?php echo the_field('text_button_sixth_section',$post); ?>

          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews_users ">
    <h3 class="text-center title_section">Отзывы клиентов</h3>
    <div class="carousel slick-carousel">
     <?php $__currentLoopData = $reviews_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="img-review">
         <div class="layer"></div>
         <img class="slick-img img-responsive" src="<?php echo e($img->url); ?>" alt="<?php echo e($img->name); ?>">
       </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button class="btn button">СМОТРЕТЬ ВСЕ ОТЗЫВЫ</button>
  </div>
  <div class="nav_doveraut" style="background-image: url(<?php echo the_field('bg_eight_section_home',$post); ?>); )">
    <h3 class="title_section text-center">Нам доверяют</h3>
    <div class="uneversitets_blocks">
      <div class="container">
        <div class="row">
        <?php $__currentLoopData = $universitets_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $univer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="universitet">
            <div class="img-block text-center">
              <img src="<?php echo e($univer->img); ?>" alt="">
            </div>
            <div class="content-block">
              <p class="description text-center">
                <?php echo e($univer->description); ?>

              </p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="order_now">
    <button class="order_now_button" data-toggle="modal" data-target="#orderModal">
      <?php
      $text_btn_order_now = 'заказать сейчас';
      $text_btn_order_now = str_split_unicode($text_btn_order_now);

      foreach ($text_btn_order_now as $char):
        if ($char == ' '){
          $char = '&nbsp;';
        }
        echo "<p class='char'>$char</p>";
      endforeach;
      ?>

      <img src="<?= App\asset_path('images/img_order_now.png'); ?>" alt="">
    </button>
  </div>
  <?php echo $__env->make('partials.modal-order', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>