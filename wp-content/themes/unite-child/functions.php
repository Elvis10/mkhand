<?php
/**
 * _s functions and definitions
 *
 * @package unite
 */


function unite_scripts() {

	wp_enqueue_style( 'unite-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

	wp_enqueue_style( 'unite-icons', get_template_directory_uri().'/inc/css/fontawesome-all.min.css' );

	wp_enqueue_style( 'unite-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script('unite-bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );

	wp_enqueue_script( 'unite-functions', get_template_directory_uri() . '/inc/js/main.min.js', array('jquery') );

	wp_enqueue_script( 'unite-bootstrap-hover-dropdown', get_template_directory_uri() . '/inc/js/bootstrap-hover-dropdown.min.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
