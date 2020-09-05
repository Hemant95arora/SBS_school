<?php /* Template Name: TEST */ ?>

<?php
get_header();
?>
<div class="wrapper page-section">	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			 <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post() ?>
                    <?php the_content() ?>
                <?php endwhile; ?>
            <?php endif; ?> 

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
?>