<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header>
		      <div class="row">
		        <div class="col col-lg-11 mt-3">
		          <h1 class="display-4 d-none d-sm-block"><?php the_title(); ?></h1>
		          <h1 class="d-sm-none"><?php the_title(); ?></h1>
		        </div>
		      </div>

		      <div class="row">
		        <div class="col col-lg-8 col-xl-7">
		          <div class="row">
		            <div class="col">
		              <hr class="hr" />
		            </div>
		          </div>
		        </div>
		      </div>
		    </header>

				<div class="row">
					<div class="col-lg-8 col-xl-7">
		    		<div class="entry-content">
		      		<?php the_content(); ?>
		    		</div><!-- .entry-content -->
					</div>

					<div class="col-sm-3 offset-lg-1 d-none d-lg-block">
						<div class="card mb-5">
							<a href="https://podcast.coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/podcast.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
							<div class="card-body">
								<p class="card-text">Stella interviews experts from across the PR industry and beyond.</p>
							</div>
						</div>

						<div class="card">
							<a href="https://coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/ad.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
							<div class="card-body">
								<p class="card-text">Make Coverage Reports Faster.</p>
							</div>
						</div>
					</div>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->
		</div><!-- .container -->
	<?php endwhile; ?>
</main><!-- #main -->

<?php get_footer(); ?>
