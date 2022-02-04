<?php
	get_header();
	include get_template_directory() . '/inc-site-skip-nav.php';
	include get_template_directory() . '/inc-site-alert.php';
	include get_template_directory() . '/inc-site-header.php';

	while(have_posts()) { the_post();
?>

<section id="site-masthead" role="complementary" aria-label="Photo Slideshow">
	<div class="masthead-content">
		<h1><?php the_field('masthead_heading'); ?></h1>

		<?php if (get_field('masthead_sub_heading')): ?>
			<p><?php the_field('masthead_sub_heading'); ?></p>
		<?php endif; ?>

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
					<?php if (get_field('intro_heading')): ?>
						<h2><?php the_field('intro_heading'); ?></h2>
					<?php endif; ?>
					
					<?php if (get_field('intro_sub_heading')): ?>
						<p><?php the_field('intro_sub_heading'); ?></p>
					<?php endif; ?>
				</div>

				<?php the_content(); ?>

				<p><a href="#" class="button">Learn More</a></p>
			</div>
		</div>
	</section>

	<section class="content mblock-5 mblock-med-4 mblock-sml-3 bg-white-alt">
		<div class="content-heading center">
			<?php if (get_field('section_a_heading')): ?>
				<h2><?php the_field('section_a_heading'); ?></h2>
			<?php endif; ?>

			<?php if (get_field('section_a_sub_heading')): ?>
				<p><?php the_field('section_a_sub_heading'); ?></p>
			<?php endif; ?>
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
					<?php if (get_field('section_a1_heading')): ?>
						<h3><?php the_field('section_a1_heading'); ?></h3>
					<?php endif; ?>

					<?php the_field('section_a1_content'); ?>
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
					<?php if (get_field('section_a2_heading')): ?>
						<h3><?php the_field('section_a2_heading'); ?></h3>
					<?php endif; ?>

					<?php the_field('section_a2_content'); ?>
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
				<?php if (get_field('section_b_heading')): ?>
					<h2><?php the_field('section_b_heading'); ?></h2>
				<?php endif; ?>

				<?php if (get_field('section_b_sub_heading')): ?>
					<p><?php the_field('section_b_sub_heading'); ?></p>
				<?php endif; ?>
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
						<?php if (get_field('section_c1_heading')): ?>
							<h2><?php the_field('section_c1_heading'); ?></h2>
						<?php endif; ?>

						<?php if (get_field('section_c1_sub_heading')): ?>
							<p><?php the_field('section_c1_sub_heading'); ?></p>
						<?php endif; ?>
					</div>

					<?php the_field('section_c1_content'); ?>

					<p><a href="#" class="button">Learn More</a></p>
				</div>

				<div class="image scale-image">
					<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-14.jpg" alt="Photo by Christian Koch / xt1an">
				</div>
			</div>

			<div class="content-split-item cg-2 mb-5 mb-med-4 mb-sml-3">
				<div class="text mb-med-4">
					<div class="content-heading">
						<?php if (get_field('section_c2_heading')): ?>
							<h2><?php the_field('section_c2_heading'); ?></h2>
						<?php endif; ?>

						<?php if (get_field('section_c2_sub_heading')): ?>
							<p><?php the_field('section_c2_sub_heading'); ?></p>
						<?php endif; ?>
					</div>

					<?php the_field('section_c2_content'); ?>

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
			<?php if (get_field('testimonial')): ?>
				<blockquote><p><?php the_field('testimonial'); ?></p></blockquote>
			<?php endif; ?>

			<?php if (get_field('testimonial')): ?>
				<figcaption><cite><?php the_field('testimonial_author'); ?></cite></figcaption>
			<?php endif; ?>
		</figure>

		<img src="<?php echo get_template_directory_uri(); ?>/temp-dir-photos/homepage-content-16.jpg" alt="Photo by Christian Koch / xt1an">
	</section>
</main>

<?php
	} // end while(have_posts()) { ... }
	get_footer();
?>