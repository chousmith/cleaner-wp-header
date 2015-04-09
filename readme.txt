=== Cleaner WP Header ===
Contributors: chousmith
Requires at least: 3.0
Tested up to: 4.1.1
Stable tag: 0.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Blindly removes some default tags that WordPress puts in the header area, like feed_links, rsd_link, shortlink, wp_generator, rel_canonical, etc based off https://scotch.io/?p=1062

== Description ==

Blindly removes some default tags that WordPress puts in the header area :

* feed_links ( Post / Comment / Category feed )
* rsd_link
* wlwmanifest_link
* index_rel_link
* parent_post_rel_link
* start_post_rel_link
* adjacent_posts_rel_link
* wp_generator
* rel_canonical
* wp_shortlink_wp_head

Just set it, and forget it.

== Installation ==

1. Upload all files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in the WordPress Admin Panel
3. Flush caches?

== Frequently Asked Questions ==

= Can you configure which of those tags and outputs gets removed? =

Not at this time, no, the plugin just activates 1 function which removes the action hooks for all those items listed in the Description. Using a Settings page with options and checkboxes and having to check that on page load or whatever could potentially add a at least tiny amount of slowdown that is outside of the idea of this plugin at least at this time. 

Just set it, and forget it.

An answer to that question.
== Changelog ==

= 0.1.2 =
* Updating plugin Description and Info

= 0.1.1 =
* Code cleanup

= 0.1 =
* Initial release based on https://scotch.io/?p=1062