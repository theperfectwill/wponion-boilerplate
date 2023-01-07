<?php
// Plugin Name: WP Regex (php for regex comparisons)
// namespace ThePerfectWill\WpRegex;
defined('ABSPATH') or exit;
// return;
require_once('core/vendor/autoload.php');
require_once('fallback/vendor/autoload.php');
// testing
use \TRegx\SafeRegex\preg;
if (!function_exists('wp_regex')) {
	function wp_regex($thisRegexPattern, $thisValue) {
		return preg::match($thisRegexPattern, $thisValue, $matchStatus);
	}
}
else {
	return;
}
