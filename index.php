<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="container">
  <?php if ( have_posts() ) : ?>
    <header>
      <div class="row">
        <div class="col-lg-10 my-3">
          <h1 class="display-4 d-none d-sm-block mb-0"><?php the_archive_title(); ?></h1>
          <h1 class="d-sm-none mb-0"><?php the_archive_title(); ?></h1>
          <?php the_archive_description( '<p class="lead description">', '</p>' ); ?>
          <hr />
        </div>
      </div>
    </header>
  <?php endif; ?>

  <main id="main" role="main">
  	<?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'post' ); ?>
      <?php endwhile; ?>

      <?php get_template_part( 'template-parts/pagination' ); ?>
  	<?php else : ?>
  		<?php get_template_part( 'template-parts/content', 'none' ); ?>
  	<?php endif; ?>
  </main><!-- #main -->
</div>

<?php get_footer(); ?>
