<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container-fluid py-3 py-md-5">
    <div class="row d-flex align-items-center mt-lg-5">
      <div class="col-lg-6">
        <?php the_post_thumbnail('large',  array( 'class' => 'img-fluid mb-3' )) ?>
      </div>
      <div class="col-lg-6 px-lg-5">
        <h6 class="text-sans text-uppercase opacity-6">Episode <?php echo get_post_meta(get_the_ID(), 'episode', true); ?></h6>
        <h2 class="display-4 text-serif"><?php the_title(); ?></h2>
        <h5 class="mt-3">with <?php echo get_post_meta(get_the_ID(), 'guest', true); ?></h5>
        <div class="mt-5">
          <audio controls preload="metadata" style=" width:300px;">
            <source src="<?php echo get_post_meta(get_the_ID(), 'mp3', true); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>

        <hr class="mt-5">

        <ul class="list-inline mt-3">
          <li class="list-inline-item mt-2"><a href="https://podcasts.apple.com/us/podcast/pr-resolution-podcast-with-stella-bayles/id1423627061?mt=2" target="_blank" class="btn btn-light">Apple Podcasts</a></li>
          <li class="list-inline-item mt-2"><a href="https://open.spotify.com/show/0TR10egIXD6p4cmHDCAN2H" target="_blank" class="btn btn-light">Spotify</a></li>
        </ul>
      </div>
    </div>
  </div>


  <!-- transcript -->
  <div class="container-fluid py-5">
    <!-- about this episode -->
    <div class="row">
      <div class="col-lg-8">
        <h3 class="mb-4">About this episode</h3>
          <div class="entry-content lead">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- transcript -->
    <!-- <div class="row">
      <div class="col-lg-8">
        <h3 class="mb-4 mt-5">Read the transcript from this episode</h3>

      </div>
    </div> -->
  </div>
</article>