<?php
get_header();
?>
<div class="main_content">
	<?php echo do_shortcode('[metaslider id="17"]'); ?>
        <div class="container">
             <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post() ?>
                    <?php the_content() ?>
                <?php endwhile; ?>
            <?php endif; ?> 

        </div><!-- container -->
    </div><!-- main_content -->
<?php

get_footer();
?>