<?php

if( ! function_exists( 'mp_generate_hash' ) ) {

	/**
	 * mp_generate_hash - Generates a hash based on two vars
	 *
	 * @access public
	 * @return string
	 */
	function mp_generate_hash( $one, $two = null )
	{
		return substr( md5( $one . maybe_serialize( $two ) ), 0, 24 );
	}
}

if( ! function_exists( 'mp_get_cache' ) ) {

	/**
	 * mp_get_cache - Get a cache object (transient)
	 *
	 * @access public
	 * @return string|array
	 */
	function mp_get_cache( $hash )
	{
		return Magepress_Cache::get( $hash );
	}
}

if( ! function_exists( 'mp_set_cache' ) ) {

	/**
	 * mp_set_cache - Set a cache object (transient)
	 *
	 * @access public
	 * @return bool
	 */
	function mp_set_cache( $hash, $title, $response, $name )
	{
		return Magepress_Cache::set( $hash, $title, $response, $name );
	}
}

if( ! function_exists( 'mp_purge_cache' ) ) {

	/**
	 * mp_set_cache - Set a cache object (transient)
	 *
	 * @access public
	 * @return bool
	 */
	function mp_purge_cache( $hash )
	{
		return Magepress_Cache::purge( $hash );
	}
}