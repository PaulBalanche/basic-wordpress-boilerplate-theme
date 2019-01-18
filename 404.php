<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package basic-theme-boilerplate
 */

get_header();

	esc_html_e( 'Oops! That page can&rsquo;t be found.', 'basic-theme-boilerplate' );
	esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'basic-theme-boilerplate' );
	
	get_search_form();

get_footer();