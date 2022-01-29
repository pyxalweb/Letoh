<?php
	get_header();
	include get_template_directory() . '/inc-site-skip-nav.php';
	include get_template_directory() . '/inc-site-alert.php';
	include get_template_directory() . '/inc-site-header.php';
?>

<section id="site-masthead" role="complementary" aria-label="Photo Slideshow">
	<div class="masthead-content">
    	<h1>Lorem, ipsum perspiciatis molestias dolor rem fuga</h1>
        <p>Lorem ipsum dolor sit amet consectetur elit</p>
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
					<h2>Kissimmee's Finest Hotel</h2>
					<p>Ramada Kissimmee Gateway Hotel</p>
				</div>

				<p>One mile from the magic of Walt Disney World®, our relaxing resort-style hotel is the perfect destination for your family vacation or group travel to the Orlando/Kissimmee area. Complimentary scheduled shuttles offer easy transportation to Disney theme parks, Universal Studios Orlando®, SeaWorld® Orlando, and local shopping. Cool off in our two outdoor pools, recharge in our fitness center, or shoot hoops on our basketball court.<br><br>Stay connected with free Wi-Fi or host a meeting or family celebration in 8,000 square feet of event space, including our salons and outdoor gazebo. Enjoy delicious food at our Smokehouse Grill or watch the game at Mulligan's Sports Bar. Whether you are planning a family getaway or a special event, Ramada Kissimmee Gateway by Wyndham is the place to relax, meet, dine, and explore. Discover one of Central Florida's most vibrant and beautiful destinations and experience the vacation of a lifetime at our family-friendly hotel in Orlando.</p>

				<p><a href="#" class="button">Learn More</a></p>
			</div>
		</div>
	</section>

	<section class="content mblock-5 mblock-med-4 mblock-sml-3 bg-white-alt">
		<div class="content-heading center">
			<h2>Our Rooms</h2>
			<p>Relax & Enjoy</p>
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
					<h3>Lorem ipsum harum optio</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, vero impedit voluptate, expedita accusantium pariatur ea sequi dolores cum dolore necessitatibus. Dolorem est quo magni non, quisquam id iure deserunt at rem doloremque a animi. Repellendus quia hic eveniet mollitia voluptatum praesentium consectetur, ut vero?</p>
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
					<h3>Lorem ipsum sorito</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem a iusto harum optio accusamus modi quidem, cumque eligendi eius consequatur voluptatibus, eos iste sit quod provident quos qui corporis tenetur accusantium sed placeat, odio animi! Labore cumque, numquam at facilis doloremque, corrupti nemo nobis odit possimus, beatae!</p>
				</div>
			</div>
		</div>

		<div class="center">
			<p><a href="/kissimmee-hotel-rooms" class="button">View All Rooms</a></p>
		</div>
	</section>






<?php
	$posts = new WP_Query(array (
		'post_type' => 'post',
		'ignore_sticky_posts' => 1
	));

	while($posts->have_posts()) {
		$posts->the_post();
?>

	<section class="post-item">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post-meta">
			<p><?php the_time('m/d'); ?> - <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
		</div>
	</section>

<?php
	}
?>
</main>

<?php
	get_footer();
?>