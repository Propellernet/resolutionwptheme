<?php get_header(); ?>

<main id="main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="bg-wave-dots">
		    <header>
					<div class="container-fluid py-3 py-lg-5">
						<div class="row bg-shapes-i-dots">
							<div class="col text-center">
								<h1 class="display-1"><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</header>
	
				<div class="container-fluid">
					<div class="row">
						<div class="offset-lg-1 col-lg-10 text-center">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" width="1120" height="630" src="https://www.youtube.com/embed/HsN9CE4pPes" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid py-4 py-lg-5">
					<div class="row pb-5">
						<div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6 lead">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
</main>

<div class="container-fluid bg-shapes-i-dots-bottom pb-5">
	<div class="row pb-5 mb-5">
		<div class="col ">
			<h2 class="display-4 bg-shapes-i text-center py-5">Tools we&rsquo;ve made...</h2>
			<hr class="pb-5">
			<div class="row my-lg-5">
				<div class="col-10 col-md-6 col-lg-3">
					<a href="https://coveragebook.com/" target="_blank">
						<img src="<? echo get_theme_file_uri( 'assets/images/coveragebook-portrait.svg' ) ?>" alt="CoverageBook logo" class="img-fluid w-75 mb-4 mb-lg-0">
					</a>
				</div>
				<div class="col-lg-9">
					<h3><a href="https://coveragebook.com/" target="_blank" class="text-dark">CoverageBook</a></h3>
					<p class="lead">Showcase your media coverage &amp; measure performance with CoverageBook. The simple, fast way to impress your clients with high-quality coverage reports. Minus all the faff.</p>
					<p><strong>Try it free at <a href="https://coveragebook.com/" target="_blank">coveragebook.com ></a></strong></p>
				</div>
			</div>
			<hr>

			<div class="row my-lg-5">
				<div class="col-10 col-md-6 col-lg-3">
					<a href="https://answerthepublic.com/" target="_blank">
						<img src="<? echo get_theme_file_uri( 'assets/images/atp-dark.png' ) ?>" alt="Answer The Public logo" class="img-fluid w-75 mb-4 mb-lg-0">
					</a>
				</div>
				<div class="col-lg-9">
					<h3><a href="https://answerthepublic.com/" target="_blank" class="text-dark">AnswerThePublic</a></h3>
					<p class="lead">Whether you’re a digital marketer, an SEO expert, a content producer, or a PR pro, AnswerThePublic will help you reach further, dig deeper and do more with search data.</p>
					<p class="lead">It’s a goldmine of consumer insight you can use to create fresh, ultra-useful content, products and services. The kind your customers really want.</p>
					<p><strong>Try it free at <a href="https://answerthepublic.com/" target="_blank">answerthepublic.com ></a></strong></p>
				</div>
			</div>
			<hr>

			<div class="row my-lg-5">
				<div class="col-10 col-md-6 col-lg-3">
					<a href="https://answertheclient.com/" target="_blank">
						<img src="<? echo get_theme_file_uri( 'assets/images/atc-screenshot.jpg' ) ?>" alt="Answer The Client screenhsot" class="img-fluid w-75 mb-4 mb-lg-0 border">
					</a>
				</div>
				<div class="col-lg-9">
					<h3><a href="https://answertheclient.com/" target="_blank" class="text-dark">AnswerTheClient</a></h3>
					<p class="lead">AnswerTheClient uses your Google Analytics data to help simply demonstrate what traffic your coverage sent to a specific website.</p>
					<p class="lead">It’s Google Analytics data for your PR coverage. With 98% of the boring stuff taken out. And it's free!</p>
					<p><strong>Try it free at <a href="https://answertheclient.com/" target="_blank">answertheclient.com ></a></strong></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
