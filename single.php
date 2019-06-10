<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header>
		      <div class="row">
		        <div class="col col-lg-11 mt-3">
		          <small><?php echo reading_time( get_the_ID() ) ?> read</small>
		          <h1 class="display-4 d-none d-sm-block"><?php the_title(); ?></h1>
		          <h1 class="d-sm-none"><?php the_title(); ?></h1>
		        </div>
		      </div>

		      <div class="row">
		        <div class="col col-lg-8 col-xl-7">
		          <div class="row">
		            <div class="col">
		              <h6 class="author vcard">
		                <a class="url fn n text-black" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
		                  <?php the_author() ?>
		                </a>
		              </h6>
		            </div>
		            <div class="col text-right">
		              <h6><?php the_date() ?></h6>
		            </div>
		          </div>

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
							<a href="https://podcast.coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/podcast-square.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
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

				<div class="row">
			    <div class="col-lg-8 col-xl-7">
			      <hr class="hr" />
			    </div>
			  </div>

				<div class="entry-meta">
				  <div class="row author vcard">
				    <div class="col-3 col-sm-2 col-lg-1 mb-3">
				      <a href="<?php echo esc_url ( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
								<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 200 ) ?>" class="img-fluid rounded-circle" alt="<?php the_author() ?>">
							</a>
				    </div>

				    <div class="col-sm-9 col-md-7 col-xl-6 my-2">
							<h4>
								<a class="url fn n" href="<?php echo esc_url ( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
									<?php the_author() ?>
								</a>
							</h4>
				      <p>
								<?php the_author_meta( 'description' ) ?>
							</p>
				    </div>
					</div>

					<?php if ( get_the_time( 'Ymd' ) !== get_the_modified_time( 'Ymd' ) ) : ?>
						<div class="row">
					    <div class="col-lg-8 col-xl-7">
					      <hr class="hr" />
					    </div>

					    <div class="col-lg-8 mb-2">
					      <p class="small mb-2">
									Updated at
									<time class="updated" datetime="<?php the_modified_date( DATE_W3C ) ?>">
										<?php the_modified_date() ?>
									</time>,
									originally written at
									<time class="entry-date published" datetime="<?php the_date( DATE_W3C ) ?>">
										<?php the_date() ?>
									</time>
								</p>
					    </div>
					  </div>
					<?php endif; ?>

				  <div class="row d-lg-none">
				    <div class="col-lg-8 col-xl-7">
				      <hr class="hr mt-0 mb-4" />
				    </div>

						<div class="col-6 d-lg-none">
							<div class="card mb-5">
								<a href="https://podcast.coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/podcast-square.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
							</div>
						</div>

						<div class="col-6 d-lg-none">
							<div class="card">
								<a href="https://coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/ad.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
							</div>
						</div>
				  </div>
				</div><!-- .entry-meta -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div><!-- .container -->
	<?php endwhile; ?>
</main><!-- #main -->

<?php get_footer(); ?>
