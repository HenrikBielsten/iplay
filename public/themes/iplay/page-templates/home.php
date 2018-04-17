<?php /* Template name: home */ ?>

<?php get_header(); ?>

<!-- Here we start a loop to be able to get all the custom fields from WP -->
<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

    <div class="hero col-md-12 p-0 m-0" style="background-image: url('<?php the_field('hero_image')['url'] ?>'); background-attachment: fixed;">

        <div class="hero_logo_div row">
            <img class="hero_logo" src="<?php the_field('hero_logo')['url'] ?>" alt="">
        </div>

        <p class="hero_p"><?php the_field('hero_text') ?></p>
        <div class="hero_text">

            <p class="hero_roles hero_athletes"><?php the_field('athletes') ?></p>
            <p class="hero_roles hero_coaches"><?php the_field('coaches') ?></p>
            <p class="hero_roles hero_fans"><?php the_field('fans') ?></p>
            <p class="hero_roles hero_agents"><?php the_field('agents') ?></p>
            <p class="hero_roles hero_sponsors"><?php the_field('sponsors') ?></p>

        </div> <!-- End hero text -->

        <img class="hero_mockup" src="<?php the_field('hero_mockup')['url'] ?>" alt="">

    </div>  <!-- End Hero -->

    <div class="sports col-md-12 p-0 m-0">

        <!-- Slider main container -->
        <div class="swiper-container swiper-background" data-per-view="3" data-delay="1800">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- This starts a loop so that we can get all the custom post types and the custom fields attached to them -->
                <?php $args = array(
                    'post_type' => 'sports',
                    'posts_per_page' => -1,
                ); ?>

                <?php $productLoop = new WP_Query($args); ?>
                <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

                    <?php $icon = get_field('icon'); ?>
                    <?php $name = strtoupper(get_field('name')); ?>

                    <div class="swiper-slide">
                        <img class="sports_icon" src="<?php echo $icon ?>" alt="">
                        <p class="sports_name"><?php echo $name ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

    </div> <!-- End swiper -->

    <div class="sports_text_div">
        <p class="sports_text"><?php the_field('sports_text') ?></p>
    </div>

    <div class="sports_buttons_div">

        <a><div class="get_app sports_button"><p>GET THE APP</p></div></a>

        <a><div class="sports_button" data-toggle="modal" data-target="#subscribe_modal"><p>SUBSCRIBE</p></div></a>

    </div>

</div> <!-- End Sports -->

<div class="roles col-md-12 p-0 m-0">

    <!-- This starts a loop so that we can get all the custom post types and the custom fields attached to them -->
    <?php $args = array(
        'post_type' => 'roles',
        'posts_per_page' => -1,
    ); ?>

    <?php $productLoop = new WP_Query($args); ?>
    <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

        <?php $image = get_field('image'); ?>
        <?php $name = strtoupper(get_field('name')); ?>
        <?php $icon_1 = get_field('icon_1'); ?>
        <?php $icon_2 = get_field('icon_2'); ?>
        <?php $icon_3 = get_field('icon_3'); ?>
        <?php $statement_1 = get_field('statement_1'); ?>
        <?php $statement_2 = get_field('statement_2'); ?>
        <?php $statement_3 = get_field('statement_3'); ?>

        <div class="role" data-toggle="modal" data-target="#roles_modal"
        data-name="<?php echo $name ?>"
        data-image="<?php echo $image ?>"
        data-icon1="<?php echo $icon_1 ?>"
        data-icon2="<?php echo $icon_2 ?>"
        data-icon3="<?php echo $icon_3 ?>"
        data-statement1="<?php echo $statement_1 ?>"
        data-statement2="<?php echo $statement_2 ?>"
        data-statement3="<?php echo $statement_3 ?>"
        >
        <img src="<?php echo $image ?>" class="shadow">
        <p><?php echo $name ?></p>


    </div> <!-- End roles -->

<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

<!-- This part shows up as a pop-up when you press one of the roles -->
<div class="modal fade" id="roles_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content roles_modal_background">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="roles-modal-body modal-body">
                <div class="pop_up modal_header">
                    <img class="pop_up_image" src="">
                    <p class="pop_up_name"></p>
                </div>
                <div class="pop_up pop_up_line">
                    <img class="pop_up_icon_1" src="">
                    <p class="pop_up_statement_1"></p>
                </div>
                <div class="pop_up pop_up_line">
                    <img class="pop_up_icon_2" src="">
                    <p class="pop_up_statement_2"></p>
                </div>
                <div class="pop_up pop_up_line">
                    <img class="pop_up_icon_3" src="">
                    <p class="pop_up_statement_3"></p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End modal -->

</div> <!-- End Roles -->

<div class="super_users sports col-md-12 p-0 m-0" style="background-image: url('<?php the_field('super_users_background')['url'] ?>'); background-attachment: fixed;">

    <p class="super_users_header"><?php the_field('super_users_header') ?></p>

    <!-- Slider main container -->
    <div class="swiper-container super-container" data-per-view="1" data-delay="4000">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

            <!-- This starts a loop so that we can get all the custom post types and the custom fields attached to them -->

            <?php $args = array(
                'post_type' => 'super_users',
                'posts_per_page' => -1,
            ); ?>

            <?php $productLoop = new WP_Query($args); ?>
            <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

                <?php $usersImage = get_field('super_user_image'); ?>
                <?php $usersQuote = get_field('super_user_quote'); ?>

                <div class="swiper-slide">
                    <img class="user_img" src="<?php echo $usersImage ?>" alt="">
                    <p class="user_quote"><?php echo $usersQuote ?></p>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

</div> <!-- End swiper -->

</div> <!-- End super_users -->

<div class="get_in_touch">

    <div class="sports_buttons_div">

        <a><div class="get_app sports_button"><p>GET THE APP</p></div></a>

        <a><div class="sports_button" data-toggle="modal" data-target="#subscribe_modal"><p>SUBSCRIBE</p></div></a>

        <!-- This part shows up as a pop-up when you press the GET IN TOUCH button -->
        <div class="modal fade" id="subscribe_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="get_in_touch_modal_background modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body modal-padding">
                        <div class="get_in_touch_header">
                            <p>NEWSLETTER</p>
                        </div>
                        <p class="subscribe_text">Subscribe to our newsletter and get the lates news and offers.</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Email adress" required>
                            </div>
                        </form>
                        <div class="pop_up_footer">
                            <a><div class="submit_button"><p>SUBMIT</p></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End modal -->

    </div> <!-- End sports_buttons_div -->

    <a><div class="get_in_touch_button" data-toggle="modal" data-target="#get_in_touch_modal"><p>GET IN TOUCH</p></div></a>

    <!-- This part shows up as a pop-up when you press the GET IN TOUCH button -->
    <div class="modal fade" id="get_in_touch_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="get_in_touch_modal_background modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body modal-padding">
                    <div class="get_in_touch_header">
                        <p>GET IN TOUCH</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email adress" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message-text" placeholder="Message" required></textarea>
                        </div>
                    </form>
                    <div class="contact_div">
                        <img src="<?php the_field('email')['url'] ?>" alt="">
                        <p>info@iplay.global</p>
                    </div>
                    <div class="contact_div">
                        <img src="<?php the_field('phone')['url'] ?>" alt="">
                        <p>+46 725 455 900</p>
                    </div>
                    <div class="pop_up_footer">
                        <a><div class="submit_button"><p>SUBMIT</p></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- End modal -->

</div> <!-- End get_in_touch -->

<?php
}
}
get_footer(); ?>
