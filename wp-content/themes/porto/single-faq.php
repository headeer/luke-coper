<?php get_header(); ?>

<?php
global $porto_settings;
$builder_id = porto_check_builder_condition('single');
if ($builder_id) {
	echo do_shortcode('[porto_block id="' . esc_attr($builder_id) . '" tracking="layout-single-' . esc_attr($builder_id) . '"]');
} else {
	wp_reset_postdata();
	?>

	<div id="content" role="main" class="porto-single-page">

		<?php
		if (have_posts()):
			the_post();
			?>

			<?php porto_render_rich_snippets(); ?>

			<div class="faq-content">
				<?php the_content(); ?>
			</div>

		<?php endif; ?>

	</div>
	<?php
	// Show tooltip to build with Porto Template Builder
	porto_add_block_tooltip('single');
}
?>
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