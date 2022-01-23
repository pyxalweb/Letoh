<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site-header" id="header">
		<div class="site-logo">
			<?php
				if (is_front_page()) {
			?>
			<h1 class="logo">Letoh</h1>
			<?php
				}
				else {
			?>
			<a href="/" class="logo">Letoh</a>
			<?php
				}
			?>
		</div>
		<nav class="site-nav">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/hello-world">Hello World</a></li>
			</ul>
		</nav>
	</header>