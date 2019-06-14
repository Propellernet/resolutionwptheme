<?php get_header(); ?>

<style>
#page > header { display: none; }
</style>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="container">
		  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header>
		      <div class="row">
		        <div class="col col-md-6 mt-5">
		          <h1 class="display-4 d-none d-sm-block"><?php the_title(); ?></h1>
		          <h1 class="d-sm-none"><?php the_title(); ?></h1>

              <hr class="hr" />
		        </div>
		      </div>
		    </header>

				<div class="row">
					<div class="col-md-6">
		    		<div class="entry-content">
		      		<?php the_content(); ?>
		    		</div><!-- .entry-content -->
          </div>

          <div class="col-md-6">
            <h3>Our latest posts</h3>
            <?php $latest_posts = new WP_Query( array( 'posts_per_page' => 3 )); ?>
            <?php while ($latest_posts -> have_posts()) : $latest_posts -> the_post(); ?>
              <small><?php the_date(); ?></small>
              <h2 class="h5"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt('(more…)'); ?>
            <?php endwhile; ?>
            <p><a href="/archive">More of our writing</a></p>
					</div>
        </div>
      </article><!-- #post-<?php the_ID(); ?> -->
    </div>
  <?php endwhile; ?>

  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-3">
        <div class="card mb-5">
          <a data-formkit-toggle="b081efd952" href="https://pages.convertkit.com/b081efd952/f5147b79b0" class="stretched-link">
            <img src="<?php echo get_theme_file_uri('assets/images/resolution.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century">
          </a>
          <div class="card-body">
            <p class="card-text">Get our newsletter fortnightly with great PR resources from across the Internet.</p>
          </div>
        </div>
      </div>

			<div class="col-sm-3">
				<div class="card mb-5">
					<a href="https://podcast.coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link">
            <img src="<?php echo get_theme_file_uri('assets/images/podcast.jpg') ?>" class="card-img-top" alt="The Resolution Podcast">
          </a>
					<div class="card-body">
						<p class="card-text">Stella interviews experts from across the PR industry and beyond.</p>
					</div>
				</div>
      </div>

      <div class="col-sm-3">
				<div class="card mb-5">
					<a href="#" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/book.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
					<div class="card-body">
						<p class="card-text">Public Relations Digital eBook. Worth every second of your time.</p>
					</div>
				</div>
      </div>

      <div class="col-sm-3">
				<div class="card mb-5">
					<a href="#" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/email-course.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
					<div class="card-body">
						<p class="card-text">A brilliant, free educational course, by email. 5 emails.</p>
					</div>
				</div>
      </div>
    </div>
  </div>

  <div class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-4">
					<a href="https://coveragebook.com/?utm_source=blog&utm_campaign=blog_article" class="stretched-link"><img src="<?php echo get_theme_file_uri('assets/images/ad.jpg') ?>" class="card-img-top" alt="PR Reporting for the 2st Century"></a>
        </div>
				<div class="col-8 col-sm-2">
          <p class="mt-5 text-white">Brought to you by the people behind CoverageBook</p>
					<h4 class="h1 mt-5 text-white">Make Coverage Reports Faster.</h4>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</main><!-- #main -->

<?php get_footer(); ?>
