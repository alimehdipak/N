<?php
/**
 * The template part for displaying the site logo, community and crate post button
 *
 * @package BoomBox_Theme
 * @since   1.0.0
 * @version 2.8.3
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

$options_set     = boombox_get_theme_options_set( array(
	'branding_logo_small',
	'branding_logo_dark_small',
	'header_layout_community_text',
	'header_layout_button_text',
	'header_layout_button_plus_icon',
	'header_layout_button_link',
) );
$is_auth_allowed = boombox_is_auth_allowed();
$small_logo      = esc_url( $options_set['branding_logo_small'] );
$small_logo_dark = esc_url( $options_set['branding_logo_dark_small'] );
$community_text  = esc_html__( $options_set['header_layout_community_text'], 'boombox' );
if ( $is_auth_allowed || $small_logo || $community_text ) { ?>
	<div class="bb-community community">

		<?php if ( $small_logo || $small_logo_dark ) { ?>
			<span class="logo">

				<?php if ( $small_logo ) {
					$small_logo_class = $small_logo_dark ? 'bb-logo-light' : ''; ?>

					<img class="<?php echo $small_logo_class; ?>" src="<?php echo $small_logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
				<?php }

				if ( $small_logo_dark ) {
					$small_logo_dark_class = $small_logo ? 'bb-logo-dark' : ''; ?>

					<img class="<?php echo $small_logo_dark_class; ?>" src="<?php echo $small_logo_dark; ?>" alt="<?php bloginfo( 'name' ); ?>" />
				<?php } ?>

			</span>
		<?php }

		if ( $community_text ) { ?>
			<span class="text"><?php echo $community_text; ?></span>
			<?php
		}

		if ( $is_auth_allowed && apply_filters( 'boombox/community/create_post_button/allow_render', true ) ) {
			echo boombox_get_create_post_button(
				array(
					'create-post',
					'bb-btn',
					'bb-btn-default',
				),
				esc_html__( $options_set['header_layout_button_text'], 'boombox' ),
				$options_set['header_layout_button_plus_icon'],
				$options_set['header_layout_button_link']
			);
		} ?>
	</div>
<?php } ?>