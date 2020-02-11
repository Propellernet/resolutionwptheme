<a href="<?php the_permalink(); ?>">
  <?php the_post_thumbnail( 'medium_large', ['class' => 'img-fluid mb-3 position-relative layer-2'] ) ?>
</a>
<h6 class="text-sans text-uppercase opacity-6">
  Episode <?php echo get_post_meta(get_the_ID(), 'episode', true); ?>
</h6>
<h3><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h3>
<h6 class="text-sans font-weight-normal mt-2">with <?php echo get_post_meta(get_the_ID(), 'guest', true); ?></h6>
