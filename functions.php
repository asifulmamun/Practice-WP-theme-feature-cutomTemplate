<?php
/**
 * seopage1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seopage1
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function seopage1_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on seopage1, use a find and replace
		* to change 'seopage1' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'seopage1', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'seopage1' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'seopage1_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'seopage1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function seopage1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seopage1_content_width', 640 );
}
add_action( 'after_setup_theme', 'seopage1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function seopage1_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'seopage1' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'seopage1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'seopage1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seopage1_scripts() {
	// wp_enqueue_style( 'seopage1-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'seopage1-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'seopage1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'seopage1_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}








// Custom

// JS
function enqueue_my_script() {
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/build/js/app.js', '', '1.0.0', true);
	// wp_enqueue_script('tailwindCss', 'https://cdn.tailwindcss.com', '', '3.3.3', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_script');

// CSS
function enqueue_custom_css() {
	wp_enqueue_style('xtrade', get_template_directory_uri() . '/assets/build/css/app.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_css');

// xtrade menu
function register_custom_menu() {


	register_nav_menu('xtradeMenu', __('xTrade Menu'));


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);



}
add_action('after_setup_theme', 'register_custom_menu');




// Custom User Meta
// Display custom user meta fields on the user's profile page
function custom_user_meta_fields($user) {
    ?>
    <h3><?php _e('Custom User Meta Fields', 'text-domain'); ?></h3>
    <table class="form-table">
        <tr>
            <th><label for="dribbble_url"><?php _e('Dribbble URL', 'text-domain'); ?></label></th>
            <td>
                <input type="text" name="dribbble_url" id="dribbble_url" value="<?php echo esc_attr(get_user_meta($user->ID, 'dribbble_url', true)); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Enter your Dribbble URL.', 'text-domain'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter_url"><?php _e('Twitter URL', 'text-domain'); ?></label></th>
            <td>
                <input type="text" name="twitter_url" id="twitter_url" value="<?php echo esc_attr(get_user_meta($user->ID, 'twitter_url', true)); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Enter your Twitter URL.', 'text-domain'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="discord_url"><?php _e('Discord URL', 'text-domain'); ?></label></th>
            <td>
                <input type="text" name="discord_url" id="discord_url" value="<?php echo esc_attr(get_user_meta($user->ID, 'discord_url', true)); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Enter your Discord URL.', 'text-domain'); ?></span>
            </td>
        </tr>
        <!-- Add more custom user meta fields as needed -->
    </table>
    <?php
}
add_action('show_user_profile', 'custom_user_meta_fields');
add_action('edit_user_profile', 'custom_user_meta_fields');

// Save custom user meta fields
function save_custom_user_meta_fields($user_id) {
    if (current_user_can('edit_user', $user_id)) {
        $dribbble_url = sanitize_text_field($_POST['dribbble_url']);
        $twitter_url = sanitize_text_field($_POST['twitter_url']);
        $discord_url = sanitize_text_field($_POST['discord_url']);
        
        update_user_meta($user_id, 'dribbble_url', $dribbble_url);
        update_user_meta($user_id, 'twitter_url', $twitter_url);
        update_user_meta($user_id, 'discord_url', $discord_url);
        // Update additional user meta fields as needed
    }
}
add_action('personal_options_update', 'save_custom_user_meta_fields');
add_action('edit_user_profile_update', 'save_custom_user_meta_fields');
