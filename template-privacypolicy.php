<?php 
/*
Template Name: Privacy Policy
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="privacy_wrapper">
				<?php echo the_content(); ?>
			</div>
			<?php
    endwhile; // End of the loop.
    ?>
</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();