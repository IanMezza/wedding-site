<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jack_&_Rose
 */

?><!DOCTYPE html>
<!--<html --><?php //language_attributes(); ?><!-->
<html lang="es"></html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" id="lightgallery-css" href="https://xn--labodadelao-beb.love/wp-content/themes/jackrose/siteorigin/widgets/jackrose-sow-gallery-grid/css/lightgallery.min.css?ver=1.2.19" type="text/css" media="all">
        <link rel="stylesheet" id="dashicons-css" href="https://xn--labodadelao-beb.love/wp-includes/css/dashicons.min.css?ver=6.1.1" type="text/css" media="all">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class( jackrose_get_theme_mod( 'animation' ) ? 'jackrose-enable-animations' : 'jackrose-disable-animations' ); ?>>
		<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
		<?php
		$preloader = jackrose_get_theme_mod( 'preloader' );
		$embed = false;
		foreach ( $preloader as $p ) {
			if ( is_page_template( 'page-templates/' . $p . '.php' ) ) {
				$embed = true;
				break;
			}
		}
		?>

		<?php if ( $embed ) : ?>
			<div id="preloader" class="preloader">
				<div class="wrapper">
					<div class="preloader-content">
						<?php
						$logo = jackrose_get_theme_mod( 'preloader_logo' );
						$logo = ( is_integer( $logo ) ) ? $logo : jackrose_get_attachment_id_from_url( $logo );
						?>

						<?php if ( ! empty( $logo ) ) : ?>
							<?php
							$meta = wp_get_attachment_metadata( $logo );
							$type = pathinfo( wp_get_attachment_url( $logo ), PATHINFO_EXTENSION );

							global $wp_filesystem;
							if ( empty( $wp_filesystem ) ) {
								require_once ABSPATH . '/wp-admin/includes/file.php';
								WP_Filesystem();
							}

							$data = $wp_filesystem->get_contents( get_attached_file( $logo ) );
							$base64 = base64_encode( $data );
							?>
							<img src="<?php echo esc_attr( 'data:image/' . $type . ';base64,' . $base64 ); ?>" width="<?php echo esc_attr( $meta['width'] ); ?>" height="<?php echo esc_attr( $meta['height'] ); ?>" >
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jackrose' ); ?></a>
			<div id="top"></div>

<?php jackrose_hero_section(); ?>

<?php //jackrose_header(); ?>

			<div id="content" class="site-content content-section">
				<div class="wrapper">
