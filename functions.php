<?php
/**
 * Theme functions and definitions
 *
 * @since 1.0.0
 * @package Coldbox_Official
 */

/**
 * Scripts
 */
function enqueue_scripts() {

	if ( is_front_page() && ! is_admin() ) {

		wp_enqueue_style( 'official-style', get_theme_file_uri( 'style.min.css' ), [], '1.0.4' );
		wp_dequeue_style( 'icomoon' );
		wp_deregister_script( 'comment-reply' );
		wp_deregister_script( 'wp-embed' );
		wp_deregister_script( 'jquery' );
		wp_dequeue_style( 'cd-style' );
		wp_deregister_style( 'cd-style' );
		wp_dequeue_script( 'cd-script' );
		wp_dequeue_script( 'imagesloaded' );
		wp_dequeue_script( 'masonry' );
		wp_deregister_style( 'GoogleFonts' );
		wp_dequeue_style( 'OpenSans' );
		wp_deregister_style( 'SourceSansPro' );
		wp_dequeue_style( 'bogo' );
		wp_dequeue_style( 'FontAwesome' );
		remove_action( 'wp_head', 'feed_links', 2 );
	}
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts', 11, 3 );


/**
 * Adds theme supports
 *
 * @since 1.0.0
 */
function theme_supports() {

	load_child_theme_textdomain( 'official', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'theme_supports' );



/**
 * Load GA
 *
 * @since 1.0.0
 */
function load_scripts() {
	?>
	<script type="text/javascript">function active(){nav.classList.toggle("is-active")}var nav=document.getElementsByClassName("nav-menu");nav=nav[0];var toggle=document.getElementsByClassName("nav-toggle");toggle=toggle[0],toggle.addEventListener("click",active,!1);</script>
	<?php
}
add_action( 'wp_footer', 'load_scripts' );


/**
 * Output ogp info
 *
 * @since 1.0.0
 */
function social_settings() {

	if ( is_front_page() ) {
		?>
			<meta property="og:type" content="website" />
			<meta property="og:site_name" content="Coldbox" />
			<meta property="og:title" content="<?php echo esc_html( wp_get_document_title() ); ?>" />
			<meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
			<meta property="og:image" content="<?php echo esc_attr( get_theme_file_uri( '/img/coldbox-thumb.jpg' ) ); ?>" />
			<meta property="og:url" content="<?php echo esc_url( home_url() ); ?>" />
			<meta name="twitter:card" content="summary_large_image" />
			<meta property="twitter:url" content="<?php echo esc_url( home_url() ); ?>" />
			<meta name="twitter:site" content="@mirucons" />
			<meta name="twitter:creator" content="@mirucons" />
	
			<link rel="icon" type="image/jpg" href="<?php echo esc_attr( get_theme_file_uri( '/img/coldbox-favicons.jpg' ) ); ?>">
			<?php
	}
	
	if ( is_front_page() ) {
		remove_action( 'wp_head', 'cd_addon_meta_ogp' );	
	}
}
add_action( 'wp_head', 'social_settings', 1, 1 );


add_filter( 'cd_addon_ogp_image', function( $image ) {
	$image = get_theme_file_uri( '/img/coldbox-thumb.jpg' );
	return $image;
});

/**
 * Remove emoji
 *
 * @since 1.0.0
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
