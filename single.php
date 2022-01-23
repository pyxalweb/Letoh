<?php
	get_header();
?>

<main>
<?php
	while(have_posts()) {
		the_post();
?>

	<section class="post">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
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