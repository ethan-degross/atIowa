<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/*
    Give Pods access to local admins
*/
add_filter( 'pods_is_admin', 'slug_let_admins_admin', 10, 3 );
function slug_let_admins_admin( $has_access, $cap, $capability ) {
	$capability = 'admin';
	return $capability;
}


/*
    Set the Feedzy cache lifetime for a specfic feed
*/
function bweb_feedzy_cache_duration( $feedCacheDuration) {
        return 600; // integer in seconds

    return $feedCacheDuration;
}
add_filter( 'wp_feed_cache_transient_lifetime', 'bweb_feedzy_cache_duration', 10, 2 );

/*
    Set the Feedzy posts to random
*/
function feedzy_feed_items_random( $items){
		shuffle ( $items );
	return $items;
}

add_filter('feedzy_feed_items', 'feedzy_feed_items_random', 9, 2);
