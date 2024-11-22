<?php
global $porto_block_template;
if (empty($porto_block_template)):
	?>
	<!DOCTYPE html>
	<html style="margin-top: 0!important" <?php echo defined('AMP__VERSION') ? 'id="htmlAmp"' : ''; ?> 	<?php language_attributes(); ?>>

	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500" />

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/mobile.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
else:
	porto_action_head();
endif;
?>
	<?php get_template_part('header/header_before'); ?>