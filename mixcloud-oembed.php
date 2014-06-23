<?php
/*
Plugin Name:    Mixcloud oEmbed Support
Plugin URI:     http://wordpress.org/plugins/mixcloud-oembed-support
Description:    Adds support for http://mixcloud.com/ to the internal oEmbed parser
Author:         Greg Tangey
Author URI:     http://ignite.digitalginition.net
Version:        0.1
*/

function mixcloud_add_oembed_support() {
  wp_oembed_add_provider('http://mixcloud.com/*', 'http://www.mixcloud.com/oembed/');
  wp_oembed_add_provider('http://www.mixcloud.com/*', 'http://www.mixcloud.com/oembed/');
  wp_oembed_add_provider('https://mixcloud.com/*', 'https://www.mixcloud.com/oembed/');
  wp_oembed_add_provider('https://www.mixcloud.com/*', 'https://www.mixcloud.com/oembed/');
}
add_filter('init', 'mixcloud_add_oembed_support');

?>
