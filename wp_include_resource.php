<?php
/*
Plugin Name: WP Include Resource
Plugin URI:  https://www.github.com/golles
Description: Simply include a resource into your WordPress content. Eg. a custom PHP script or a web page.
Version:     1.0
Author:      golles
Author URI:  https://golles.nl/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function include_resource_shortcode($atts)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    $attributes = shortcode_atts(array(
        'resource' => '',
        'querystring' => false
    ), $atts);

    $resource = $attributes['resource'];
    if (!empty($resource)) {
        if ($attributes['querystring'] && !empty($_SERVER['QUERY_STRING'])) {
            if (strpos($resource, '?') !== false) {
                $resource .= '&';
            } else {
                $resource .= '?';
            }
            $resource .= $_SERVER['QUERY_STRING'];
        }

        // Writes output directly to the screen. readfile is faster than file_get_contents.
        readfile($resource);
    }
}

add_shortcode('include_resource', 'include_resource_shortcode');