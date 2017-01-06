<?php
/**
 * @package Make
 */
?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js IE9 IE" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/custom.css'; ?>">
	</head>

	<body <?php body_class(); ?>>
		<div id="site-wrapper" class="site-wrapper">
			<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'make' ); ?></a>

			<?php ttfmake_maybe_show_site_region( 'header' ); ?>

			<div id="site-content" class="site-content">
				<div class="container">
