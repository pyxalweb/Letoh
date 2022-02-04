<header id="site-header">
	<div class="header-container">
		<div class="header-logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo@1x.png" srcset="<?php echo get_template_directory_uri(); ?>/images/logo@1x.png, <?php echo get_template_directory_uri(); ?>/images/logo@2x.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo@3x.png 3x" alt="Logo">
			</a>
		</div>

		<div class="header-nav">
			<nav class="nav-traditional" aria-label="Navigation Menu">
				<ul>
					<?php include("inc-site-navigation.php") ?>
				</ul>
			</nav>

			<div class="nav-booking">
				<a class="booking-toggle" href="#" aria-label="Toggle Booking Overlay">Book Now</a>
			</div>

			<a class="overlay-nav-toggle" href="#" aria-label="Toggle Navigation Menu Overlay">
                <?php include("inc-site-navigation-svg.php"); ?>
            </a>
		</div>
	</div>

	<div class="nav-booking-mobile">
        <a class="booking-link" href="#" target="_blank">Book Now</a>
    </div>

	<div id="site-overlays">
        <nav class="overlay-nav" aria-label="Alternative Navigation Menu">
            <div class="nav-close-container">
                <a class="nav-close" href="#" aria-label="Close Reservations"></a>
            </div>

            <ul>
                <?php include("inc-site-navigation.php"); ?>
            </ul>
        </nav>

        <div id="booking-1" class="overlay-booking" role="form" aria-label="Make a Reservation">
            <a class="booking-close" href="#" aria-label="Close Reservations"></a>

            <?php include("inc-site-booking.php"); ?>
        </div>
    </div>
</header>

<div id="booking-2" class="extra-booking" role="form" aria-label="Book a Room">
    <?php include("inc-site-booking.php"); ?>
</div>