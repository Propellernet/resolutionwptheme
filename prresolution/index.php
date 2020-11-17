<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="container-fluid bg-stella py-4 py-lg-5">
  <div class="row py-lg-5">
    <div class="col text-center">
      <?php if ( have_posts() ) : ?>
        <div class="row">
          <div class="col offset-md-1 col-md-10 text-center ">
            <h5 class="text-primary"><img src="<? echo get_theme_file_uri( 'assets/images/book-logomark.png' ) ?>" width="23px" class="mr-2">PR Resolution</h5>
            <h1 class="display-3"><?php the_archive_title(); ?></h1>
            <?php the_archive_description( '<p class="h4 font-weight-normal mb-4">', '</p>' ); ?>

            <?php if ( intval( $paged ) == 0 ) : ?>
              <h4>Recent articles</h4>
            <?php else : ?>
              <h4>Page <?php echo $paged; ?></h4>
            <?php endif; ?>

          </div>
        </div>
      <?php endif; ?>

      <main id="main" role="main">
        <div class="row mx-lg-n4 mx-xl-n5">
        	<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="col-md-4 mt-3 mt-lg-5 px-lg-4 px-xl-5">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'large', ['class' => 'img-fluid mb-3'] ) ?>
                </a>
                <h6 class="text-sans text-uppercase text-primary opacity-8 small">
                  <?php echo reading_time( get_the_ID() ) ?> read
                </h6>
                <h3>
                  <a href="<?php the_permalink(); ?>" class="text-dark">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <h6 class="text-sans font-weight-normal mt-2">by <?php the_author() ?></h6>
                <p class="mt-3"><?php the_excerpt() ?></p>
              </div>
            <?php endwhile; ?>
        	<?php endif; ?>
        </div>
      </main><!-- #main -->
    </div>
  </div>
</div>

<div class="container-fluid py-4 py-lg-5 mb-3 mb-lg-5">
  <div class="row mx-lg-n4 mx-xl-n5">
    <div class="col text-right">
      <?php if ( get_previous_posts_link() ) : ?>
        <a href="<?php echo get_previous_posts_page_link(); ?>" class="btn btn-lg btn-outline-dark">Newer articles</a>
      <?php endif; ?>
    </div>
    <div class="col text-left">
      <?php if ( get_next_posts_link() ) : ?>
        <a href="<?php echo get_next_posts_page_link(); ?>" class="btn btn-lg btn-outline-dark">Older articles</a>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
