<?php
  $args = array(
            'format'             => '?page=%#%',
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => '&laquo;',
            'next_text'          => '&raquo;',
            'type'               => 'array',
            'current'            => max( 1, get_query_var( 'paged' ) ),
          );
  $links = paginate_links( $args );
?>
<?php if ( is_array( $links ) ) : ?>
  <div class="row">
    <div class="offset-lg-2 col">
      <nav aria-label="Posts navigation">
        <ul class="pagination">
          <?php foreach ( $links as $key => $link ) : ?>
            <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
              <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </div>
<?php endif; ?>
