<article class="post row mb-3">
  <div class="col-6 col-sm-4 col-lg-2 mb-2">
    <?php the_post_thumbnail( 'medium_large', ['class' => 'img-fluid'] ) ?>
  </div>
  <div class="col-12 col-sm-8 col-lg-8">
    <h2 class="title h3">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-secondary"><?php the_title() ?></a><br />
      <small class="text-black-50"><?php the_author() ?></small>
    </h2>

    <div>
      <?php the_excerpt(); ?>

      <?php wp_link_pages(); ?>
    </div>

    <!--
    <div class="meta">
      <div class="category"><?php echo get_the_category_list(); ?></div>
      <div class="tags"><?php echo get_the_tag_list( '&nbsp;', '&nbsp;' ); ?></div>
    </div><!-- .meta -->
  </div><!-- .meta -->
</article><!-- .post.row -->
