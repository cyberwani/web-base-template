<?php

$live_domain = $_SERVER['HTTP_HOST'];
if ( JQUERY_STAGING ) {
	$live_domain = str_replace( JQUERY_STAGING_PREFIX, '', $live_domain );
}
if ( 0 === validate_file( $live_domain ) ) {
	foreach ( (array) glob( dirname( __FILE__ ) . "/$live_domain/*.php" ) as $site_specific_file ) {
		require_once( $site_specific_file );
	}
}
unset( $live_domain, $site_specific_file );
