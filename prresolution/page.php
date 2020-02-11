<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
	  <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="py-3 py-lg-5">
				<div class="container-fluid pt-3 pb-5">
					<div class="row">
						<div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6 text-center">
							<h2 class="mb-4"><?php the_title(); ?></h2>
							<div class="lead">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
