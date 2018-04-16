
</div>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>

        <div class="footer">

            <div class="adress_container">
                <p class="street"><?php the_field('adress_street') ?></p>
                <p class="post_code"><?php the_field('adress_post_code') ?></p>
                <p class="country"><?php the_field('adress_country') ?></p>
            </div>

            <div class="contact">
                <p class="telephone">Tel: <?php the_field('contact_phone') ?></p>
                <p class="email">Email: <?php the_field('contact_email') ?></p>
            </div>

            <div class="socials">

                <ul>

                    <?php $args = array(
                        'post_type' => 'socials',
                        'posts_per_page' => -1,
                    ); ?>

                    <?php $productLoop = new WP_Query($args); ?>
                    <?php if ( $productLoop->have_posts() ) : while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>

                        <?php $socials = get_field('icon'); ?>
                        <?php $socials_link = get_field('link'); ?>

                        <li>
                            <a href="<?php echo $socials_link ?>"><img class="social_icons" src="<?php echo $socials ?>"></a>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </ul>

        </div> <!-- End socials -->

        <p class="copyright"><?php the_field('copyright') ?></p>

    </div> <!-- End footer -->

    <?php
}
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
