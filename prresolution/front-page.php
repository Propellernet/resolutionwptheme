<?php get_header(); ?>

<div class="pb-5">

	<div class="bg-wave-dots py-5">
		<div class="container-fluid py-md-4">
			<div class="row justify-content-center mt-lg-5">
				<div class="col col-md-9">
					<!-- TODO: Separate text and background -->
					<img src="<? echo get_theme_file_uri( 'assets/images/pr-resolution-big-logo-shapes.svg' ) ?>" alt="PR Resolution logo" class="img-fluid" >
				</div>
				<div class="row">
					<div class="col text-center">
						<h2 class="font-weight-light my-3">Expert advice for PR people in a down-to-earth format</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- Overview row -->
	<div class="container-fluid pb-lg-5 d-none d-lg-block">
		<div class="row mx-lg-n4 mx-xl-n5 mb-4">
			<div class="col-lg-4 px-lg-4 px-xl-5">
				<h6 class="text-sans text-uppercase text-primary mb-0">Read</h6>
				<h2 class="display-3">Blog</h2>
				<div class="border-dash bg-primary"></div>
				<p class="h2 font-weight-light">Insightful articles for PR Pros</p>
				<a href="/blog" class="btn btn-lg btn-outline-primary mt-3">Browse articles</a>
			</div>

			<div class="col-lg-4 px-lg-4 px-xl-5">
				<h6 class="text-sans text-uppercase text-primary mb-0">Listen</h6>
				<h2 class="display-3">Podcast</h2>
				<div class="border-dash bg-primary"></div>
				<p class="h2 font-weight-light">Straight-talking podcast that cuts through the jargon</p>
				<a href="/podcast" class="btn btn-lg btn-outline-primary mt-3">Browse episodes</a>
			</div>

			<div class="col-lg-4 px-lg-4 px-xl-5">
				<h6 class="text-sans text-uppercase text-primary mb-0">Go in-depth</h6>
				<h2 class="display-3">Books</h2>
				<div class="border-dash bg-primary"></div>
				<p class="h2 font-weight-light">Concise, practical books for busy PR people</p>
				<a href="/books" class="btn btn-lg btn-outline-primary mt-3">View books</a>
			</div>
		</div>
	</div>
</div>

<main id="main" role="main">
	<!-- Blog row -->
	<div class="bg-success bg-shapes-i-dots-bottom text-white pb-lg-4">
		<div class="container-fluid py-5">
			<div class="row py-lg-4">
				<div class="col">
					<h5 class="text-sans mb-n1">Latest from the</h5>
					<h2 class="display-3 text-yellow">Blog</h2>
					<div class="border-dash bg-primary"></div>
				</div>
				<div class="col text-right d-none d-md-block">
					<a href="/blog" class="btn btn-lg btn-outline-light">Browse all articles</a>
				</div>
			</div>

			<div class="position-relative row mx-lg-n4 mx-xl-n5">
				<img src="<? echo get_theme_file_uri( 'assets/decoration/square-dots.svg' ) ?>" alt="dotted pattern" class="d-none d-lg-block position-absolute w-25" style="top: -26px; left: 20px;">
				<?php $blog = new WP_Query( 'category_name=blog&posts_per_page=3' ); ?>
				<?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
					<!-- primary story on mobile -->
					<div class="col-lg-4 position-relative px-lg-4 px-xl-5">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium_large', ['class' => 'img-fluid mb-3 position-relative layer-2'] ) ?>
						</a>
						<h6 class="text-sans text-uppercase opacity-6">Measurement</h6>
						<h3><a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a></h3>
						<h6 class="text-sans font-weight-normal mt-2">by <?php the_author() ?></h6>
					</div>

					<!-- secondary story on mobile -->
					<!-- <div class="col-6 col-lg-4 mt-4 mt-lg-0 px-lg-4 px-xl-5">
						<a href="/blog/articles/"><img src="/images/blog/direct-lifetime-value.jpg" alt="Article image" class="img-fluid mb-3"></a>
						<h6 class="text-sans text-uppercase opacity-6">Measurement</h6> -->
						<!-- smaller heading for mobile -->
						<!-- <h3 class="h4 d-block d-lg-none"><a href="/blog/articles/" class="text-white">The best free and paid online monitoring tools for PR right now</a></h3> -->
						<!-- regular heading -->
						<!-- <h3 class="d-none d-lg-block"><a href="/blog/articles/" class="text-white">The best free and paid online monitoring tools for PR right now</a></h3> -->
						<!-- <h6 class="text-sans font-weight-normal mt-2">by Laura Joint</h6> -->
					<!-- </div> -->
			  <?php endwhile; ?>
			</div>

			<div class="row mt-4 d-block d-md-none">
				<div class="col text-center">
					<a href="/blog" class="btn btn-lg btn-outline-light">Browse all articles</a>
				</div>
			</div>
		</div>
	</div>

  <!-- Podcast row -->
	<div class="bg-dark text-white bg-curved-dots-left pb-lg-4">
		<div class="container-fluid py-5">

			<div class="row py-lg-4">
				<div class="col">
					<h5 class="text-sans mb-n1">Latest from the</h5>
					<h2 class="display-3 text-blush">Podcast</h2>
					<div class="border-dash bg-primary"></div>
				</div>
				<div class="col text-right d-none d-md-block">
					<a href="/podcast" class="btn btn-lg btn-outline-light">Browse all episodes</a>
				</div>
			</div>

			<div class="row mx-lg-n4 mx-xl-n5">
				<?php $podcast = new WP_Query( 'category_name=podcast&posts_per_page=3' ); ?>
				<?php while ( $podcast->have_posts() ) : $podcast->the_post(); ?>
					<div class="col-lg-4 position-relative px-lg-4 px-xl-5">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium_large', ['class' => 'img-fluid mb-3 position-relative layer-2'] ) ?>
						</a>
						<h6 class="text-sans text-uppercase opacity-6">
							Episode <?php echo get_post_meta(get_the_ID(), 'episode', true); ?>
						</h6>
						<h3><a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a></h3>
						<h6 class="text-sans font-weight-normal mt-2">with <?php echo get_post_meta(get_the_ID(), 'guest', true); ?></h6>
					</div>

					<!-- smaller heading for mobile -->
					<!-- <h3 class="h4 d-block d-lg-none"><a href="/podcast/episodes/" class="text-white">Should you be meme marketing?</a></h3> -->
			  <?php endwhile; ?>
			</div>

			<div class="row mt-4 d-block d-md-none">
				<div class="col text-center">
					<a href="/podcast" class="btn btn-lg btn-outline-light">Browse all episodes</a>
				</div>
			</div>
		</div>

	</div>

	<!-- Book row -->
	<div class="bg-light bg-shapes-i-bottom pb-lg-4">

		<div class="container-fluid py-5">
			<div class="row py-lg-4">
				<div class="col">
					<h5 class="text-sans mb-n1">Featured</h5>
					<h2 class="display-3">Book</h2>
					<div class="border-dash bg-primary"></div>
				</div>
				<div class="col text-right d-none d-md-block">
					<a href="/books" class="btn btn-lg btn-outline-dark">View all books</a>
				</div>
			</div>

			<div class="row d-flex align-items-center mb-lg-5">
				<div class="col-8 col-md-6 col-lg-5 col-xl-4 position-relative">
					<a href="/books/prs-digital-resolution">
						<div class="stripes"></div>
						<img src="<? echo get_theme_file_uri( 'assets/images/books/prs-digital-resolution-cover.jpg' ) ?>" alt="PRs Digital Resolution book cover" class="img-fluid position-relative layer-2">
					</a>
				</div>
				<div class="col-md-6 offset-lg-1 col-lg-5 col-xl-6">
					<h2 class="h1 mt-3 mt-lg-0"><a href="/books/prs-digital-resolution" class="text-dark">Public Relations' Digital Resolution</a></h2>
					<h4 class="mt-2 mt-lg-3">Your guide to a brighter PR future and bigger budgets</h4>
					<h6 class="text-sans mt-4">by Stella Bayles</h6>
					<p class="mt-4">SEO is talked about a lot in Public Relations. Some say the industry has missed an opportunity, others say it’s the future of PR. Others don’t know what it means and hope it goes away.</p>
					<p class="mt-5 text-center text-md-left">
						<a href="https://gumroad.com/l/PRResolution" class="btn btn-lg btn-primary" target="_blank">Buy the book</a>
						<!-- <a href="/books/prs-digital-resolution" class="btn btn-lg btn-primary">Get the book</a> -->
					</p>
				</div>
			</div>

			<div class="row mt-3 d-block d-md-none">
				<div class="col text-center">
					<a href="/books" class="btn btn-lg btn-outline-dark">View all books</a>
				</div>
			</div>
		</div>
	</div>
</main>

<div class="container-fluid py-5">
	<div class="row mt-lg-5 pt-lg-5">
		<div class="offset-lg-3 col-lg-6">
			<p class="h4 mb-3">The PR Resolution explores emerging areas in Public Relations to help share knowledge and push the industry forward.</p>
			<p>Made by the team at PR reporting tool, <a href="https://coveragebook.com/" target="_blank">CoverageBook</a>. We’re also the same crew behind the insight app, <a href="https://answerthepublic.com/" target="_blank">AnswerThePublic</a> and the free Google analytics PR tool, <a href="https://answertheclient.com/" target="_blank">AnswerTheClient</a>.</p>

			<p>Drawing on our own experience of working in digital marketing and with the help of experts, we explore new techniques, technologies, and digital strategies. We explain the detail and dispel any myths, all in plain language.</p>
			<p>This is a jargon-free zone!</p>

			<p><a href="/about"><b>Find out more about PR Resolution ></b></a></p>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/newsletter-signup' ); ?>

<?php get_footer(); ?>
