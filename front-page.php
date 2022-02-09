<?php
	// header.php
	get_header();

	// include site header files
	include get_template_directory() . '/inc-site-skip-nav.php';
	include get_template_directory() . '/inc-site-alert.php';
	include get_template_directory() . '/inc-site-header.php';

	// ACF: Field Names
	$masthead_heading = get_field('masthead_heading');
	$masthead_sub_heading = get_field('masthead_sub_heading');

	$intro_heading = get_field('intro_heading');
	$intro_sub_heading = get_field('intro_sub_heading');

	$section_a_heading = get_field('section_a_heading');
	$section_a_sub_heading = get_field('section_a_sub_heading');
	$section_a1_heading = get_field('section_a1_heading');
	$section_a1_content = get_field('section_a1_content');

	$section_a2_heading = get_field('section_a2_heading');
	$section_a2_content = get_field('section_a2_content');

	$section_b_heading = get_field('section_b_heading');
	$section_b_sub_heading = get_field('section_b_sub_heading');

	$section_c1_heading = get_field('section_c1_heading');
	$section_c1_sub_heading = get_field('section_c1_sub_heading');
	$section_c1_content = get_field('section_c1_content');

	$section_c2_heading = get_field('section_c2_heading');
	$section_c2_sub_heading = get_field('section_c2_sub_heading');
	$section_c2_content = get_field('section_c2_content');
	
	$testimonial = get_field('testimonial');
	$testimonial_author = get_field('testimonial_author');

	// the loop
	while(have_posts()) { the_post();
?>

<section id="site-masthead" role="complementary" aria-label="Photo Slideshow">
	<div class="masthead-content">
		<?php acf_text($masthead_heading, 'h1'); ?>
		<?php acf_text($masthead_sub_heading, 'p'); ?>
        <a href="#" class="button">Learn More</a>
    </div>

    <div class="masthead-slideshow homepage arrows-default">
		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-masthead-01.jpg" alt="Photo by Christian Koch / xt1an">
				</div>

				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-masthead-02.jpg" alt="Photo by Christian Koch / xt1an">
				</div>

				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-masthead-03.jpg" alt="Photo by Christian Koch / xt1an">
				</div>
			</div>

			<div class="swiper-nav swiper-button-next"></div>
			<div class="swiper-nav swiper-button-prev"></div>

			<!-- <div class="swiper-pagination"></div> -->
		</div>
    </div>
</section>


<main id="site-content">
	<section class="content pblock-5 pblock-med-4 pblock-sml-3 bg-white">
		<div class="content-grid cols-2 cols-sml-1 cg-2">
			<div class="content-item">
				<div class="content-slideshow arrows-alternate">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-01.jpg" alt="Photo by Christian Koch / xt1an">
							</div>

							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-02.jpg" alt="Photo by Christian Koch / xt1an">
							</div>

							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-03.jpg" alt="Photo by Christian Koch / xt1an">
							</div>
						</div>

						<div class="swiper-nav swiper-button-next"></div>
						<div class="swiper-nav swiper-button-prev"></div>

						<!-- <div class="swiper-pagination"></div> -->
					</div>
				</div>
			</div>

			<div class="content-item">
				<div class="content-heading">
					<?php acf_text($intro_heading, 'h2'); ?>
					<?php acf_text($intro_sub_heading, 'p'); ?>
				</div>

				<?php the_content(); ?>

				<p><a href="#" class="button">Learn More</a></p>
			</div>
		</div>
	</section>

	<section class="content mblock-5 mblock-med-4 mblock-sml-3 bg-white-alt">
		<div class="content-heading center">
			<?php acf_text($section_a_heading, 'h2'); ?>
			<?php acf_text($section_a_sub_heading, 'p'); ?>
		</div>

		<div class="content-grid cols-2 cols-sml-1 g-2 mb-3">
			<div class="content-item bg-white">
				<div class="content-slideshow arrows-alternate">
					<div class="swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-04.jpg" alt="Photo by Christian Koch / xt1an">
							</div>

							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-05.jpg" alt="Photo by Christian Koch / xt1an">
							</div>
						</div>

						<div class="swiper-nav swiper-button-next"></div>
						<div class="swiper-nav swiper-button-prev"></div>

						<!-- <div class="swiper-pagination"></div> -->
					</div>
				</div>

				<div class="p-1">
					<?php acf_text($section_a1_heading, 'h3'); ?>
					<?php acf_text($section_a1_content, null); ?>
				</div>
			</div>

			<div class="content-item bg-white">
				<div class="content-slideshow arrows-alternate">
					<div class="content-slideshow arrows-alternate">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-06.jpg" alt="Photo by Christian Koch / xt1an">
								</div>

								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-07.jpg" alt="Photo by Christian Koch / xt1an">
								</div>
							</div>

							<div class="swiper-nav swiper-button-next"></div>
							<div class="swiper-nav swiper-button-prev"></div>

							<!-- <div class="swiper-pagination"></div> -->
						</div>
					</div>
				</div>

				<div class="p-1">
					<?php acf_text($section_a2_heading, 'h3'); ?>
					<?php acf_text($section_a2_content, null); ?>
				</div>
			</div>
		</div>

		<div class="center">
			<p><a href="#" class="button">View All Rooms</a></p>
		</div>
	</section>

	<section class="centered-slideshow-container pblock-7 pblock-med-5 pblock-sml-3 bg-white">
		<div class="content-grid cols-1">
			<div class="content-item content-heading center">
				<?php acf_text($section_b_heading, 'h2'); ?>
				<?php acf_text($section_b_sub_heading, 'p'); ?>
			</div>
		</div>

		<div class="centered-slideshow arrows-alternate mt-4 mt-med-3 mt-sml-2">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-08.jpg" alt="Photo by Christian Koch / xt1an">
					</div>

					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-09.jpg" alt="Photo by Christian Koch / xt1an">
					</div>

					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-10.jpg" alt="Photo by Christian Koch / xt1an">
					</div>

					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-11.jpg" alt="Photo by Christian Koch / xt1an">
					</div>

					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-12.jpg" alt="Photo by Christian Koch / xt1an">
					</div>

					<div class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-13.jpg" alt="Photo by Christian Koch / xt1an">
					</div>
				</div>

				<div class="swiper-nav swiper-button-next"></div>
				<div class="swiper-nav swiper-button-prev"></div>

				<!-- <div class="swiper-pagination"></div> -->
			</div>
		</div>
	</section>

	<section class="content pblock-7 pblock-med-5 pblock-sml-3 bg-white-alt">
		<div class="content-split alternating">
			<div class="content-split-item cg-2 mb-5 mb-med-4 mb-sml-3">
				<div class="text mb-med-4">
					<div class="content-heading">
						<?php acf_text($section_c1_heading, 'h2'); ?>
						<?php acf_text($section_c1_sub_heading, 'p'); ?>
					</div>

					<?php acf_text($section_c1_content, null); ?>

					<p><a href="#" class="button">Learn More</a></p>
				</div>

				<div class="image scale-image">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-14.jpg" alt="Photo by Christian Koch / xt1an">
				</div>
			</div>

			<div class="content-split-item cg-2 mb-5 mb-med-4 mb-sml-3">
				<div class="text mb-med-4">
					<div class="content-heading">
						<?php acf_text($section_c2_heading, 'h2'); ?>
						<?php acf_text($section_c2_sub_heading, 'p'); ?>
					</div>

					<?php acf_text($section_c2_content, null); ?>

					<p><a href="#" class="button">Learn More</a></p>
				</div>

				<div class="image scale-image">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-15.jpg" alt="Photo by Christian Koch / xt1an">
				</div>
			</div>
		</div>
	</section>

	<section class="wide-image">
		<figure class="wide-image-content">
			<?php acf_text($testimonial, 'blockquote'); ?>
			<?php acf_text($testimonial_author, 'cite'); ?>
		</figure>

		<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-16.jpg" alt="Photo by Christian Koch / xt1an">
	</section>
</main>

<?php
	} // end while(have_posts()) { ... }
	get_footer();
?>