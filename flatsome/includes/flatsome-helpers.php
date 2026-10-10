<?php
/**
 * Flatsome 辅助工具函数。
 *
 * @package Flatsome
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function flatsome_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
