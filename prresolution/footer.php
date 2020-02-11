<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
    </div><!-- #content -->

    <footer class="footer bg-pink text-sans py-5">
      <div class="container-fluid pt-lg-5">
        <div class="row">
          <div class="col-lg-3">
            <p><Strong>PR Resolution</Strong> is lovingly created by</p>
            <a href="https://coveragebook.com/" target="_blank">
              <img src="<? echo get_theme_file_uri( 'assets/images/coveragebook-landscape-RGB.svg' ) ?>" alt="CoverageBook logo" class="img-fluid nav-logo">
            </a>
            <p class="mt-5"><strong>Make Coverage Reports Faster at <a href="https://coveragebook.com/" target="_blank">coveragebook.com</a></strong></p>
          </div>

          <div class="col-lg-3 px-5">
            <h6>PR Resolution</h6>
            <ul class="list-unstyled mt-4">
              <li class="mt-2"><a href="/">Home</a></li>
              <li class="mt-2"><a href="/blog">Blog</a></li>
              <li class="mt-2"><a href="/podcast">Podcast</a></li>
              <li class="mt-2"><a href="/books">Books</a></li>
              <li class="mt-2"><a href="/about">About</a></li>
              <li class="mt-2"><a href="/newsletter">Newsletter</a></li>
            </ul>
          </div>

          <div class="col-lg-3 px-5">
            <h6>CoverageBook App</h6>
            <ul class="list-unstyled mt-4">
              <li class="mt-2"><a href="https://coveragebook.com/" target="_blank">Try it free</a></li>
              <li class="mt-2"><a href="https://coveragebook.com/features/" target="_blank">Features</a></li>
              <li class="mt-2"><a href="https://coveragebook.com/about/" target="_blank">About</a></li>
              <li class="mt-2"><a href="https://coveragebook.com/pricing/" target="_blank">Pricing</a></li>
            </ul>
          </div>

          <div class="col-lg-3">
            <h5>Stay ahead on all things PR...</h5>
            <p class="mt-4">Subscribe to the PR Resolution Newsletter</p>
            <p class="mt-2"><a class="btn btn-lg btn-primary px-4" href="/newsletter">Subscribe</a></p>
            <p class="mt-2">Follow us on twitter <a href="https://twitter.com/PRresolution" target="_blank">@PRResolution</a></p>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col">
            <p>
              Copyright © <?php echo date('Y') ?> CoverageBook<br />
              <small>
                a trading name of
                <a target="_blank" href="http://www.propellernet.co.uk/" class="text-dark">Propellernet Ltd</a>
              </small>
            </p>
          </div>
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>

    <script async data-uid="d4640f2fe8" src="https://coveragebook.ck.page/d4640f2fe8/index.js"></script>
  </body>
</html>
