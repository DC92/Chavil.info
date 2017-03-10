<?php

function wpm_enqueue_styles( ) {
	wp_enqueue_style( 'elitepress', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

/** 
 * Changes the URL used for the Google Sitelink Search Box functionality in WordPress SEO (Premium) 
 * The returned string must always include {search_term} to indicate where the search term should be used.
 * 
 * @returns string new searchURL
 */
function yoast_change_ssb_search() {
	return 'http://www.chaville-informatique.fr/?search={search_term}';
}

add_filter('wpseo_json_ld_search_url', 'yoast_change_ssb_search' ); 