<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

if ( ! defined('MATERIALIS_THEME_REQUIRED_PHP_VERSION')) {
	define('MATERIALIS_THEME_REQUIRED_PHP_VERSION', '5.3.0');
}

add_action('after_switch_theme', 'materialis_check_php_version');

function materialis_check_php_version()
{
	// Compare versions.
	if (version_compare(phpversion(), MATERIALIS_THEME_REQUIRED_PHP_VERSION, '<')) :
	// Theme not activated info message.
	add_action('admin_notices', 'materialis_php_version_notice');


	// Switch back to previous theme.
	switch_theme(get_option('theme_switched'));

	return false;
	endif;
}

function materialis_php_version_notice()
{
?>
<div class="notice notice-alt notice-error notice-large">
	<h4><?php esc_html_e('Materialis theme activation failed!', 'materialis'); ?></h4>
	<p>
		<?php printf(esc_html__('You need to update your PHP version to use the %s.', 'materialis'), "<strong>Materialis</strong>"); ?> <br/>
		<?php printf(
	// Translators: 1 is the users PHP version and 2 is the required PHP version.
	esc_html__('Current PHP version is %1$s and the minimum required version is %2$s', 'materialis'),
	'<strong>' . phpversion() . '</strong>',
	'<strong>' . MATERIALIS_THEME_REQUIRED_PHP_VERSION . '</strong>'
); ?>
	</p>
</div>
<?php
}

if (version_compare(phpversion(), MATERIALIS_THEME_REQUIRED_PHP_VERSION, '>=')) {
	require_once get_template_directory() . "/inc/functions.php";



	if ( ! materialis_can_show_cached_value("materialis_cached_kirki_style_materialis")) {

		if ( ! materialis_skip_customize_register()) {
			do_action("materialis_customize_register_options");
		}
	}

} else {
	add_action('admin_notices', 'materialis_php_version_notice');
}

function my_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url('https://www.otimaideia.com.br/wp-content/uploads/2020/05/logo.png');
			background-size: auto;
			width: auto;
			height: 70px;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function theme_css()
{
	wp_enqueue_style('grid', get_stylesheet_directory_uri() . '/assets/css/bootstrap-grid.min.css', '', false, 'screen');
}
add_action('wp_enqueue_scripts', 'theme_css');