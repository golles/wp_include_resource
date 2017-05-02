=== WP Include Resource Plugin ===
Contributors: golles
Tags: include, resource, script, php, webpage
Requires at least: 4.0
Tested up to: 4.7.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simply include a resource into your content. Eg. a custom PHP script or a web page.

== Description ==
This plugin enables the following shortcode:
[​include_resource]

It accepts to parameters:
-resource String, the file you want to include, eg a .php file.
-querystring boolean, if true the page query string ($_GET) will be passed on to the resource script.

Example:
[​include_resource resource="file_to_a_script.php" querystring=true]


== Installation ==
1. Activate the plugin through the "Plugins" menu in WordPress.

= 1.0 =
* Initial release.