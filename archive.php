<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monst
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="section section-our-blog">
		<div class="wrap">
			<div>
				<h2>our blog</h2>
			</div>
		</div>
	</section>
	<section class="section section-blog-image">
		<div class="wrap">
			<div class="row">

				<?php
				if (have_posts()):

					/* Start the Loop */
					while (have_posts()):
						the_post();
						?>
						<div class="col-4">
							<div class="blog__block">
								<?php
								get_template_part('template-parts/content', 'blog'); ?>
							</div>

						</div>
					<?php endwhile;


				else:
					get_template_part('template-parts/content', 'none');
				endif; ?>
			</div>
			<div class="text-center mt-30">
				<a href="#" class="btn btn--key">key feture</a>
			</div>
		</div>
	</section>
	<section class="section section-Coupon text-center">
		<div class="wrap">
			<div>
				<h5 class="text-b-white">Subscribe now to <span class="text-white">Our Newsletter</span><br>
					and get the Coupon code.</h5>
				<p class="text-b-white">All your information is completely confidential</p>
				<div class="Coupon__form">
					<?php echo do_shortcode('[contact-form-7 id="188" title="formmain"]'); ?>

				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php

get_footer();
