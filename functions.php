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

		$bg = get_theme_file_uri( 'img/bg.jpeg' );
		$fa_link = get_parent_theme_file_uri( '/fonts/fontawesome' );

		wp_enqueue_style( 'official-style', get_theme_file_uri( 'style.min.css' ), '1.0.1' );
		wp_dequeue_style( 'icomoon' );
		wp_deregister_script( 'comment-reply' );
		wp_deregister_script( 'wp-embed' );
		wp_deregister_script( 'jquery' );
		wp_dequeue_script( 'scripts' );
		wp_dequeue_script( 'imagesloaded' );
		wp_dequeue_script( 'masonry' );
		wp_deregister_style( 'GoogleFonts' );
		wp_dequeue_style( 'OpenSans' );
		wp_deregister_style( 'SourceSansPro' );
		wp_dequeue_style( 'main-style' );
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
 * Adds theme supports
 *
 * @since 1.0.0
 */
function load_ga() {
	?>
	<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-56308747-8', 'auto'); ga('send', 'pageview');</script>
	<?php
}
add_action( 'wp_head', 'load_ga' );

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

		<link rel="icon" type="image/jpg" href="<?php echo esc_attr( get_theme_file_uri( '/img/coldbox-favicon.jpg?=1.1' ) ); ?>">
		<?php
	}
}
add_action( 'wp_head', 'social_settings' );

/**
 * Remove emoji
 *
 * @since 1.0.0
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Use Google CDN's jQuery instead.
 *
 * @since 1.0.0
 */
function replace_jquery() {

	if ( ! is_front_page() && ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, '3.2.1' );
		wp_enqueue_script( 'jquery' );
	}

}
add_action( 'init', 'replace_jquery' );
