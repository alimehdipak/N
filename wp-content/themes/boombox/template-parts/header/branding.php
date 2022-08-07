<?php
/**
 * The template part for displaying the site logo and tagline
 *
 * @package BoomBox_Theme
 * @since   1.0.0
 * @version 2.0.0
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$logo      = boombox_get_logo();
$site_name = get_bloginfo( 'name' ); ?>

<div class="branding">
	<p class="site-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php if ( ! empty( $logo['light'] ) || ! empty( $logo['dark'] ) ) {
				$width  = absint( $logo['width'] );
				$height = absint( $logo['height'] );

				if ( ! empty( $logo['light'] ) ) {
					$light_logo_attrs = array(
						'src="' . esc_url( $logo['light']['src'] ) . '"',
						'alt="' . esc_attr( $site_name ) . '"',
					);

					if ( $width ) {
						$light_logo_attrs[] = 'width="' . $width . '"';
					}

					if ( $height ) {
						$light_logo_attrs[] = 'height="' . $height . '"';
					}

					if ( isset( $logo['light']['src_2x'] ) && $logo['light']['src_2x'] ) {
						$light_logo_attrs[] = 'srcset="' . esc_attr( $logo['light']['src_2x'] ) . '"';
					}

					$light_logo_attrs = implode( ' ', $light_logo_attrs );
					$class_mode       = ! empty( $logo['dark'] ) ? 'bb-logo-light' : '';
					?>
					<img class="site-logo <?php echo $class_mode; ?>" <?php echo $light_logo_attrs; ?> />
				<?php }

				if ( ! empty( $logo['dark'] ) ) {
					$dark_logo_attrs = array(
						'src="' . esc_url( $logo['dark']['src'] ) . '"',
						'alt="' . esc_attr( $site_name ) . '"',
					);

					if ( $width ) {
						$dark_logo_attrs[] = 'width="' . $width . '"';
					}

					if ( $height ) {
						$dark_logo_attrs[] = 'height="' . $height . '"';
					}

					if ( isset( $logo['dark']['src_2x'] ) && $logo['dark']['src_2x'] ) {
						$dark_logo_attrs[] = 'srcset="' . esc_attr( $logo['dark']['src_2x'] ) . '"';
					}

					$dark_logo_attrs = implode( ' ', $dark_logo_attrs );
					$class_mode      = ! empty( $logo['light'] ) ? 'bb-logo-dark' : '';
					?>
					<img class="site-logo <?php echo $class_mode; ?>" <?php echo $dark_logo_attrs; ?> />
				<?php }
			} else {
				echo esc_html( $site_name );
			}
			?>
		</a>
	</p>

	<?php if ( boombox_get_theme_option( 'branding_show_tagline' ) && ( $tagline = get_bloginfo( 'description' ) ) ) { ?>
		<p class="site-description"><?php echo esc_html( $tagline ); ?></p>
	<?php } ?>
</div>