<?php get_header(); ?>

<?php
global $porto_settings;
?>
<div id="content" role="main">
	<?php /* The loop */ ?>
	<?php
	while (have_posts()):
		the_post();
		?>

		<article <?php post_class(); ?>>
			<div class="page-content">
				<?php
				the_content();
				?>
			</div>
		</article>

	<?php endwhile; ?>

</div>

	<div class="_ desktop_app">

<?php get_footer(); ?>
</div>
<div id="mobile_app">
	<div class="mobile__index_luke_copper_mobile">
		<div class="mobile_wrapper">
			<div class="mobile_frame">
				<?php include get_template_directory() . '/footer_mobile.php'; ?>

			</div>
		</div>
	</div>
</div>