<div class="super_users col-md-12 p-0 m-0" style="background-image: url('<?php the_field('super_users_background')['url'] ?>');">

    <p class="super_users_header"><?php the_field('super_users_header') ?></p>

    <!-- Slider main container -->
          <div class="swiper-container" data-per-view="1">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">

                  <?php $args = array(
                      'post_type' => 'super_users',
                      'posts_per_page' => -1,
                  ); ?>


                  <?php $productLoop = new WP_Query($args); ?>
                  <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

                      <?php $usersImage = get_field('super_user_image'); ?>
                      <?php $usersQuote = get_field('super_user_quote'); ?>

                      <!-- Slides -->
                      <div class="swiper-slide">
                          <img src="<?php echo $usersImage ?>" alt="">
                          <p class="user_quote"><?php echo $usersQuote ?></p>
                      </div>

                  <?php endwhile; ?>
                  <?php endif; ?>

              <?php wp_reset_postdata(); ?>


              </div>

              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

              <!-- If we need scrollbar -->
              <!-- <div class="swiper-scrollbar"></div> -->
          </div>

    </div>


      <?php $args = array(
          'post_type' => 'super_users',
          'posts_per_page' => -1,
      ); ?>

      <div class="users">

          <?php $productLoop = new WP_Query($args); ?>
          <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

              <?php $usersImage = get_field('super_user_image'); ?>
              <?php $usersQuote = get_field('super_user_quote'); ?>

              <div class="user">
                  <img class="user_img" src="<?php echo $usersImage ?>" alt="">
                  <p class="user_quote"><?php echo $usersQuote ?></p>
              </div>

          <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
