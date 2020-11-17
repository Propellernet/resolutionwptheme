<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( in_category( 'podcast' ) ) { ?>
			<?php $current_id = $post->ID; ?>
			<?php get_template_part( 'template-parts/single', 'podcast' ); ?>

			<div class="container-fluid py-5 my-lg-5">
				<h5>What to listen to next...</h5>
				<hr>

				<div class="row">
					<?php $blog = new WP_Query( array( 'category_name' => 'podcast',
																						 'posts_per_page' => 3,
																						 'post__not_in' => array( $current_id )  )); ?>
					<?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
						<div class="col-md-6 col-lg-4 mt-4">
			  			<?php get_template_part( 'template-parts/content', 'podcast' ); ?>
						</div>
				  <?php endwhile; ?>
				</div>
			</div>

		<?php } else { ?>
			<?php get_template_part( 'template-parts/single', 'blog' ); ?>
		<?php } ?>
  <?php endwhile; ?>
</main><!-- #main -->

<?php get_footer(); ?>
