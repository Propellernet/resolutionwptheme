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
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</header>
			</div>
		</article>

		<div class="container-fluid py-4 py-lg-5">
			<div class="row d-flex align-items-center pb-lg-5">
				<div class="col-8 col-md-5 col-lg-5 col-xl-4 position-relative">
					<!-- <a href="/books/prs-digital-resolution"> -->
						<div class="stripes"></div>
						<img src="<? echo get_theme_file_uri( 'assets/images/books/prs-digital-resolution-cover.jpg' ) ?>" alt="PRs Digital Resolution book cover" class="img-fluid position-relative">
					<!-- </a> -->
				</div>
				<div class="col-md-7 offset-lg-1 col-lg-6 mt-3 mt-lg-0">
					<h2 class="h1">
						<!-- <a href="/books/prs-digital-resolution" class="text-dark"> -->
							Public Relations&rsquo; Digital Resolution
						<!-- </a> -->
					</h2>
					<h5 class="mt-md-3">Your guide to a brighter PR future and bigger budgets</h5>
					<h6 class="mt-4">by Stella Bayles</h6>
					<p class="mt-4">An introduction to SEO in Public Relations; A step-by-step guide to an integrated strategy, measurement, and how to win SEO-PR budgets.</p>
          <p class="mt-4">We want to encourage learning during this difficult time of COVID-19 ‘lock-down’. So, we’re giving this book away for free for a limited time period.</p>
					<p class="mt-5">
						<a href="https://gumroad.com/l/PRResolution/LockdownLearning" class="btn btn-lg btn-primary" target="_blank">Download now</a>
						<!-- <a href="/books/prs-digital-resolution" class="btn btn-lg btn-outline-primary ml-md-3">Learn more</a> -->
					</p>
				</div>
			</div>

			<hr class="mt-md-5">

		</div>

		<div class="container-fluid py-4 py-lg-5">
			<div class="row d-flex align-items-center pb-lg-5">
				<div class="col-8 col-md-5 col-lg-5 col-xl-4 position-relative">
					<!-- <a href="/books/consumer-insight-in-the-age-of-google"> -->
						<div class="stripes"></div>
						<img src="<? echo get_theme_file_uri( 'assets/images/books/consumer-insight-in-the-age-of-google-cover.jpg' ) ?>" alt="Consumer Insight in the age of Google book cover" class="img-fluid position-relative">
					<!-- </a> -->
				</div>
				<div class="col-md-7 offset-lg-1 col-lg-6 mt-3 mt-lg-0">
					<h2 class="h1">
						<!-- <a href="/books/consumer-insight-in-the-age-of-google" class="text-dark"> -->
							Consumer Insight in the Age of Google
						<!-- </a> -->
					</h2>
					<h6 class="mt-4">by Sophie Coley</h6>
					<p class="mt-4">‘Consumer Insight in the age of Google’ will teach you how to use search data to read the mind of consumers. You'll learn how to get the most out of tools like AnswerThePublic to plan content, gather audience insight, develop your brand, inform product development or to generate creative campaigns.</p>
					<p class="mt-5">
						<a href="https://gum.co/consumerInsightinageofgooglebook" class="btn btn-lg btn-primary" target="_blank">Buy the book</a>
						<!-- <a href="/books/consumer-insight-in-the-age-of-google" class="btn btn-lg btn-outline-primary ml-md-3">Learn more</a> -->
					</p>
				</div>
			</div>

			<hr class="mt-md-5">

		</div>

		<div class="container-fluid py-4 py-lg-5">
			<div class="row d-flex align-items-center pb-lg-5">
				<div class="col-8 col-md-5 col-lg-5 col-xl-4 position-relative">
					<!-- <a href="/books/pretrospective"> -->
						<div class="stripes"></div>
						<img src="<? echo get_theme_file_uri( 'assets/images/books/pretrospective-cover.jpg' ) ?>" alt="PRs Digital Resolution book cover" class="img-fluid position-relative">
					<!-- </a> -->
				</div>
				<div class="col-md-7 offset-lg-1 col-lg-6 mt-3 mt-lg-0">
					<h2 class="h1">
						<!-- <a href="/books/pretrospective" class="text-dark"> -->
							PRetrospective
						<!-- </a> -->
					</h2>
					<h5 class="mt-md-3">Making sense of data analysis in Public Relations</h5>
					<h6 class="mt-4">by Stella Bayles</h6>
					<p class="mt-4">In four short chapters you will: understand how PR analysis can be easy, learn how to generate new metrics such as estimated coverage views, improve your media hit rate, learn how to prioritise your targets, set KPIs that will improve team skills, impact business results, and generate your best campaign yet.</p>
					<p class="mt-5">
						<a href="https://gumroad.com/l/laXEg" class="btn btn-lg btn-primary" target="_blank">Buy the book</a>
						<!-- <a href="/books/pretrospective" class="btn btn-lg btn-outline-primary ml-md-3">Learn more</a> -->
					</p>
				</div>
			</div>

			<hr class="mt-md-5">

		</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
