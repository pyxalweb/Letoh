<?php
	get_header();
?>

<main>
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