<?php
	get_header();
?>

<main>
<?php
	while(have_posts()) {
		the_post();
?>

	<section class="page">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section>

<?php
	}
?>
</main>

<?php
	get_footer();
?>