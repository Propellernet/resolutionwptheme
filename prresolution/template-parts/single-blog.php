<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <div class="container-fluid py-3 py-md-5">
      <div class="row pt-md-3">
        <div class="offset-lg-1 col-lg-10 text-center">
          <h6 class="text-sans text-uppercase opacity-6">
            <?php echo reading_time( get_the_ID() ) ?> read
            <!-- Opinion -->
          </h6>
          <h1 class="display-4 text-serif"><?php the_title(); ?></h1>
          <h6 class="font-weight-normal">
            <time class="entry-date published" datetime="<?php the_date( DATE_W3C ) ?>">
              <?php the_date() ?>
            </time>
            <?php if ( get_the_time( 'Ymd' ) !== get_the_modified_time( 'Ymd' ) ) : ?>
              Updated at
              <time class="updated" datetime="<?php the_modified_date( DATE_W3C ) ?>">
                <?php the_modified_date() ?>
              </time>
            <?php endif; ?>
          </h6>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col text-center">
        <?php the_post_thumbnail('large',  array( 'class' => 'img-fluid' )) ?>
      </div>
    </div>
  </div>

  <div class="container-fluid py-5">
    <div class="row mt-lg-4">
      <!-- main content -->
      <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-0 col-xl-6">
        <div class="entry-content">
          <div class="lead">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <!-- author -->
      <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-0 col-xl-3 pr-xl-5 order-xl-first mt-5 mt-xl-0">
        <div class="author vcard">
          <h6 class="small text-sans text-uppercase font-weight-bold text-primary">Written by &mdash;</h6>
          <h5>
            <a class="text-dark url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
              <?php the_author() ?>
            </a>
          </h5>
          <p class="mb-0">
            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 200 ) ?>"
                 alt="<?php the_author() ?>" width="100px" class="img-fluid rounded-circle mt-2 mb-3 mr-3">
          </p>
          <?php if (get_the_author_meta( 'description' ) !== false) { ?>
            <p><?php the_author_meta( 'description' ) ?>
          <?php } ?>
          <?php if (get_the_author_meta( 'url' ) !== false) { ?>
            <?php
              $author_url = preg_replace("/https?\:\/\/(.+)/", "$1", get_the_author_meta( 'url' ));
              if (strpos($a, 'twitter.com') !== false)
                $author_url = preg_replace("/twitter.com\/(.+)/", "@$1", $author_url);
            ?>
            <p><a href="<?php the_author_meta( 'url' ) ?>" target="_blank" class="text-sans"><?php echo $author_url ?> </a></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
