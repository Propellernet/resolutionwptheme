<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="bg-time-flies">
  <div class="container-fluid py-4 py-lg-5">
    <div class="row pt-lg-5 bg-shapes-i-dots">
      <div class="col text-center ">

        <h5 class="text-primary"><img src="<? echo get_theme_file_uri( 'assets/images/book-logomark.png' ) ?>" width="23px" class="mr-2">PR Resolution</h5>
        <h1 class="display-1">Blog</h1>
        <p class="h3 font-weight-normal">Read things, learn things... do things better</p>
      </div>
    </div>

    <div class="row pb-lg-5">
      <!-- <div class="col text-center">
        <button class="btn btn-lg btn-outline-primary mt-3" type="button" data-toggle="collapse" data-target="#collapseTopics" aria-expanded="false" aria-controls="collapseTopics">
          Browse by topic
        </button>

        <div class="collapse" id="collapseTopics">
          <div class="row py-5 text-center">
            <div class="offset-lg-2 col-lg-8">
              <ul class="list-inline">
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Measurement</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Tactics</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Public Relations</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Social</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Instagram</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Google Analytics</a></li>

                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Measurement</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Tactics</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Public Relations</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Social</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Instagram</a></li>
                <li class="list-inline-item mx-4 mb-3"><a href="#" class="h6">Google Analytics</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div> -->
    </div>
  </div>

</div>

<!-- latest article -->
<?php $my_query = new WP_Query( 'category_name=blog&posts_per_page=1' ); ?>
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<?php $featured_id = $post->ID; ?>
<div class="bg-success text-white bg-curved-dots-left py-4 py-lg-5 mt-3 mt-lg-0">
  <div class="container-fluid pb-lg-5">
    <h3>Latest &mdash;</h3>
    <div class="row mt-3 mt-lg-5 mx-lg-n4 mx-xl-n5">
      <div class="col-lg-6 px-lg-4 px-xl-5">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'large', ['class' => 'img-fluid mb-3'] ) ?>
        </a>
      </div>
      <div class="col-lg-6 px-lg-4 px-xl-5">
        <h6 class="text-sans text-uppercase text-blush opacity-8">
          <?php echo reading_time( get_the_ID() ) ?> read
        </h6>
        <h2 class="h1">
          <a href="<?php the_permalink(); ?>" class="text-white">
            <?php the_title(); ?>
          </a>
        </h2>
        <h6 class="text-sans font-weight-normal mt-3 mb-4">by <?php the_author() ?></h6>
        <p class="opacity-8"><?php the_excerpt() ?></p>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-lg btn-outline-light">Read more...</a></p>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

<div class="container-fluid py-4 py-lg-5 my-3 my-lg-5">
  <h4>Recent articles &mdash;</h4>

  <div class="row mx-lg-n4 mx-xl-n5">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( $post->ID == $featured_id ) continue;?>
      <div class="col-md-6 mt-3 mt-lg-5 px-lg-4 px-xl-5">
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

    <!-- TODO PAGINATION  -->
  </div>
</div>

<?php get_footer(); ?>
