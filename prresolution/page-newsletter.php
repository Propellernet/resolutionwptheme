<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="bg-wave-dots">
		    <header>
					<div class="container-fluid py-3 py-lg-5">
						<div class="row py-lg-5 bg-shapes-i">
							<div class="col text-center">
								<h5 class="text-primary"><img src="<? echo get_theme_file_uri( 'assets/images/book-logomark.png' ) ?>" width="23px" class="mr-2">PR Resolution</h5>
								<h1 class="display-1"><?php the_title(); ?></h1>
							</div>
						</div>
						<div class="row">
							<div class="offset-3 col-6 offset-md-4 col-md-4 text-center">
								<img src="<? echo get_theme_file_uri( 'assets/decoration/paper-aeroplane.svg' ) ?>" alt="Paper airplane" class="img-fluid">
							</div>
						</div>
					</div>
				</header>

				<div class="container-fluid">
					<div class="row">
						<div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
							<div class="lead">
								<?php the_content(); ?>
							</div>
							<form action="https://app.convertkit.com/forms/1131384/subscriptions" class="form" method="post">
								<div class="form-group mt-4">
									<label class="sr-only" for="newsletter-sign-up-form">Your email address</label>
									<input type="email" name="email_address" class="form-control form-control-lg mb-2 mr-sm-2" id="newsletter-sign-up-form" required="required" placeholder="Your email address">
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<button type="submit" class="btn btn-lg btn-primary my-3">
									Stay up to date
								</button>
							</form>
						</div>
					</div>
					
					<div class="row my-3">
						<div class="offset-md-2 col-md-8 offset-lg-3 col-lg-6">
							<p>No longer want to receive these emails? Unsubscribe at any time.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
