=== Sub Page hierarchy ===
Contributors: mpntod
Donate link: http://www.martintod.org.uk/blog/?p=96
Tags: menu,widget,page
Requires at least: 2.0
Tested up to: 3.4
Author URI: http://www.martintod.org.uk/blog/
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a sidebar widget to let you show the list of pages beneath a particular page on your site

== Description ==

Adds a sidebar widget to let you show the list of pages beneath a particular page on your site

A quick way to show a subset of pages - without having to show all the pages on the site.

The options page for the widget shows a drop-down box of all the pages in your blog. Select one of them and only pages below that will be displayed by the widget on the menu.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `ldpagehierarchy.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to Design->Widgets and click on 'add' next to 'sub page hierarchy'
1. Go to the right of the page and hit 'edit' next to 'sub page hierarchy'
1. Select the top page of your hierarchy under 'head page'
1. Click 'change' and then 'save changes'

== Upgrade notice ==
= 1.3 =
Gets rid of the empty drop-down box if there are no pages to show and replaces it with an error message.

== Changelog ==
= 1.3 =
(June 22, 2012) Fixing the invisible drop-down box problem. Moving to the standard Wordpress  `wp_dropdown_pages()` function.
= 1.2 =
(November 26, 2007) Update by Will Howells for v2 change in DB structure for pages.
= 1.1 =
(September 12, 2006) Fixes a bug which means that page number isn't remembered.
= 1.0 =
(August 27, 2006) Original public version
