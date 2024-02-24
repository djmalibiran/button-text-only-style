<?php
/**
 * Plugin Name:       Button Text Only Style
 * Description:       "Button Text Only Style" is a lightweight WordPress plugin designed to enhance the styling options for core buttons within WordPress. This plugin enables the addition of custom text-only styles to core buttons, allowing users to easily customize the appearance of buttons on their WordPress websites without the need for extensive coding or styling knowledge. With simplicity at its core, this plugin provides a straightforward solution for users seeking to refine the visual presentation of buttons on their WordPress sites.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Daryl Malibiran
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       button-text-only-style
 *
 * @package           create-block
 */

/**
 * Register our custom block style
 *
 * @return void
 */
function button_text_only_register_style() {

	wp_enqueue_block_style(
		'core/button',
		array(
			'handle' => 'button-text-only-style',
			'src'    => plugins_url( 'button-text-only-style.css', __FILE__ ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'text-only', // .is-style-text-only
			'label' => 'Text Only',
		)
	);
}
add_action( 'init', 'button_text_only_register_style' );
