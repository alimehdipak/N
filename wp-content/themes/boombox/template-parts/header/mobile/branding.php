<?php
/**
 * The template part for displaying the site mobile navigation "Brand Bottom" template
 *
 * @package BoomBox_Theme
 * @since   2.0.0
 * @version 2.0.0
 * @var $template_helper Boombox_Header_Template_Helper Header Template Helper
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$template_helper  = Boombox_Template::init( 'header' );
$branding_options = $template_helper->get_mobile_branding_options();
?>

<div class="branding">
	<p class="site-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
			if ( ! empty( $branding_options['logo'] ) ) {
				$width  = absint( $branding_options['logo']['width'] );
				$height = absint( $branding_options['logo']['height'] );

				if ( ! empty( $branding_options['logo']['light'] ) ) {
					$logo_attrs = array(
						'src="' . esc_url( $branding_options['logo']['light']['src'] ) . '"',
						'alt="' . esc_attr( $branding_options['site_name'] ) . '"',
					);

					if ( $width ) {
						$logo_attrs[] = 'width="' . $width . '"';
					}

					if ( $height ) {
						$logo_attrs[] = 'height="' . $height . '"';
					}

					if ( isset( $branding_options['logo']['light']['src_2x'] ) && $branding_options['logo']['light']['src_2x'] ) {
						$logo_attrs[] = 'srcset="' . esc_attr( $branding_options['logo']['light']['src_2x'] ) . '"';
					}

					$logo_attrs = implode( ' ', $logo_attrs );
					$class_mode = ! empty( $branding_options['logo']['dark'] ) ? 'bb-logo-light' : '';
					?>
					<img class="site-logo-mobile <?php echo $class_mode; ?>" <?php echo $logo_attrs; ?> />

				<?php }

				if ( ! empty( $branding_options['logo']['dark'] ) ) {
					$logo_attrs = array(
						'src="' . esc_url( $branding_options['logo']['dark']['src'] ) . '"',
						'alt="' . esc_attr( $branding_options['site_name'] ) . '"',
					);

					if ( $width ) {
						$logo_attrs[] = 'width="' . $width . '"';
					}

					if ( $height ) {
						$logo_attrs[] = 'height="' . $height . '"';
					}

					if ( isset( $branding_options['logo']['dark']['src_2x'] ) && $branding_options['logo']['dark']['src_2x'] ) {
						$logo_attrs[] = 'srcset="' . esc_attr( $branding_options['logo']['dark']['src_2x'] ) . '"';
					}

					$logo_attrs = implode( ' ', $logo_attrs );
					$class_mode = ! empty( $branding_options['logo']['light'] ) ? 'bb-logo-dark' : '';
					?>
					<img class="site-logo-mobile <?php echo $class_mode; ?>" <?php echo $logo_attrs; ?> />
					<?php
				}

			} else {
				echo esc_html( $branding_options['site_name'] );
			} ?>
		</a>
	</p>
</div>