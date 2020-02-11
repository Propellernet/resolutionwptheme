<?php get_header(); ?>

<!-- TODO Background Stella as in-page image -->
<div class="container-fluid bg-stella py-4 py-lg-5">
  <div class="row py-lg-5">
    <div class="col text-center">

      <div class="bg-shapes-i-dots">
        <h5 class="text-primary"><img src="<? echo get_theme_file_uri( 'assets/images/book-logomark.png' ) ?>" width="23px" class="mr-2">PR Resolution</h5>
        <h1 class="display-1">Podcast</h1>
        <p class="h3 font-weight-normal">With host <span class="text-primary">Stella Bayles</span></p>
      </div>

      <div class="row">
        <div class="offset-lg-3 col-lg-6 mt-3">
          <p>The straight-talking Public Relations podcast that gives you the information you need to find your own PR direction.</p>
          <ul class="list-inline mt-3">
            <li class="list-inline-item mt-2"><a href="https://podcasts.apple.com/us/podcast/pr-resolution-podcast-with-stella-bayles/id1423627061?mt=2" target="_blank" class="btn btn-lg btn-primary">Apple Podcasts</a></li>
            <li class="list-inline-item mt-2"><a href="https://open.spotify.com/show/0TR10egIXD6p4cmHDCAN2H" target="_blank" class="btn btn-lg btn-primary">Spotify</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-block d-lg-none mt-3">
    <div class="offset-2 col-8 offset-md-3 col-md-6 text-center">
      <img src="<? echo get_theme_file_uri( 'assets/images/stella-coloured.jpg' ) ?>" alt="Host Stella Bayles" class="img-fluid">
    </div>
  </div>
</div>

<!-- latest article -->
<?php $my_query = new WP_Query( 'category_name=podcast&posts_per_page=1' ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<?php $featured_id = $post->ID; ?>
<div class="bg-dark text-white bg-curved-dots-left py-4 py-lg-5 mt-3 mt-lg-0">
  <div class="container-fluid pb-lg-5">
    <h3>Latest episode &mdash;</h3>
    <div class="row d-flex align-items-center mt-3 mt-lg-5 mx-lg-n4 mx-xl-n5">
      <div class="col-lg-6 px-lg-4 px-xl-5">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'large', ['class' => 'img-fluid mb-3'] ) ?>
        </a>
      </div>
      <div class="col-lg-6 px-lg-4 px-xl-5">
        <h6 class="text-sans text-uppercase text-blush opacity-8">
          Episode <?php echo get_post_meta(get_the_ID(), 'episode', true); ?>
        </h6>
        <h2 class="h1">
          <a href="<?php the_permalink(); ?>" class="text-white">
            <?php the_title(); ?>
          </a>
        </h2>
        <h6 class="text-sans font-weight-normal mt-3 mb-4">with <?php echo get_post_meta(get_the_ID(), 'guest', true); ?></h6>
        <p class="opacity-8"><?php the_excerpt() ?></p>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-lg btn-outline-light">Read more...</a></p>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

<div class="container-fluid py-4 py-lg-5 my-3 my-lg-5">
  <h4>Recent episodes &mdash;</h4>

  <div class="row mx-lg-n4 mx-xl-n5">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( $post->ID == $featured_id ) continue;?>
      <div class="col-md-6 mt-3 mt-lg-5 px-lg-4 px-xl-5">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'large', ['class' => 'img-fluid mb-3'] ) ?>
        </a>
        <h6 class="text-sans text-uppercase text-primary opacity-8 small">
          Episode <?php echo get_post_meta(get_the_ID(), 'episode', true); ?>
        </h6>
        <h3>
          <a href="<?php the_permalink(); ?>" class="text-dark">
            <?php the_title(); ?>
          </a>
        </h3>
        <h6 class="text-sans font-weight-normal mt-2">with <?php echo get_post_meta(get_the_ID(), 'guest', true); ?></h6>
        <p class="mt-3"><?php the_excerpt() ?></p>
      </div>
    <?php endwhile; ?>

    <!-- TODO PAGINATION  -->
  </div>
</div>

<?php get_footer(); ?>
