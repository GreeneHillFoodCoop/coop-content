=== Really Simple Twitter Feed Widget ===
Contributors: whiletrue
Donate link: http://www.whiletrue.it/
Tags: twitter, twitter sidebar, sidebar, social sidebar, widget, plugin, posts, links, twitter widget, twitter feed, simple twitter
Requires at least: 2.9+
Tested up to: 3.5.1
Stable tag: 1.3.17

Shows the latest tweets from a Twitter account in a sidebar widget.

== Description ==
This plugin displays the latest posts from a Twitter account in a sidebar widget. 
Easy customization of number of posts shown and replies detection.


= Bad news = 
This plugin is based on Twitter API version 1, that will be deleted on March 2013. 
Unfortunately the new Twitter API, version 1.1, is based on a more closed approach, 
so it won't be possible anymore for us to provide any "really simple" Twitter widget for WordPress. 


= Reference =

For more informations: [www.whiletrue.it](http://www.whiletrue.it/really-simple-twitter-feed-widget-for-wordpress/ "www.whiletrue.it")

Do you like this plugin? Give a chance to our other works:

* [Really Simple Facebook Twitter Share Buttons](http://www.whiletrue.it/really-simple-facebook-twitter-share-buttons-for-wordpress/ "Really Simple Facebook Twitter Share Buttons")
* [Most and Least Read Posts](http://www.whiletrue.it/most-and-least-read-posts-widget-for-wordpress/ "Most and Least Read Posts")
* [Tilted Tag Cloud Widget](http://www.whiletrue.it/tilted-tag-cloud-widget-per-wordpress/ "Tilted Tag Cloud Widget")
* [Reading Time](http://www.whiletrue.it/reading-time-for-wordpress/ "Reading Time")


== Installation ==
Best is to install directly from WordPress. If manual installation is required, please make sure to put all of the plugin files in a folder named `really-simple-twitter-widget` (not two nested folders) in the plugin directory, then activate the plugin through the `Plugins` menu in WordPress.

== Frequently Asked Questions == 

= Does the widget show my tweets in real time? =
Yes they're shown in real time, although you have to refresh the page for them to appear.

= How can I modify the styles? =

The plugin follows the standard rules for "ul" and "li" elements in the sidebar. You can set your own style modifying or overriding these rules:
ul.really_simple_twitter_widget { /* your stuff */ }
ul.really_simple_twitter_widget li { /* your stuff */ }

As for the linked username on the bottom (if enabled), you can customize it this way:
div.rstw_link_user { /* your stuff */ }

== Credits ==

The initial release of the plugin was based on previous work of Max Steel (Web Design Company, Pro Web Design Studios), which was based on Pownce for Wordpress widget.

The release 1.2.3 is based on the work of Frank Gregor.

The releases 1.3.5 and 1.3.7 are based on the work of Jim Durand.

= Translators =

* Branco, Slovak translation (WebHostingGeeks.com)
* WhileTrue, Italian translation (www.whiletrue.it)
* Inspirats, French translation (rysk-x.com)
* Aleksandra Czuba, Polish translation (www.iwasindira.com)

== Screenshots ==
1. Sample content, using default options (e.g. no active links)  
2. Options available in the Settings menu 

== Changelog ==

= 1.3.17 =
* Added: Polish translation by Aleksandra Czuba (www.iwasindira.com)

= 1.3.16 =
* Added: French translation by Inspirats (rysk-x.com)

= 1.3.15 =
* Added: Slovak translation by Branco (WebHostingGeeks.com)

= 1.3.14 =
* Fixed: widget_title filter

= 1.3.13 =
* Fixed: storing feed error 

= 1.3.12 =
* Changed: more feed error catching 

= 1.3.11 =
* Added: more debug info
* Fixed: feed error catching 

= 1.3.10 =
* Added: show debug info option

= 1.3.9.1 =
* Fixed: the Twitter icon wasn't properly shown (AKA never commit on Saturday!)

= 1.3.9 =
* Added: optional Twitter icon near the widget title
* Changed: screenshots moved outside, reducing the size of the plugin and allowing for faster updates
* Changed: cleaner options UI

= 1.3.8 =
* Changed: now the "Create links on new window/tab" option affects all kinds of link
* Changed: different regular expression for hashtag recognition

= 1.3.7 =
* Added: span wrapper element around the comma before the timestamp (class: rstw_comma), for easier design customization
* Fixed: better caching errors control (work by Jim Durand)

= 1.3.6 =
* Fixed: avoid php warning on preg_replace function (php 5.3.5 bug)

= 1.3.5 =
* Fixed: better caching errors control (work by Jim Durand) 

= 1.3.4 =
* Changed: better caching control, allowing two widget with same username and different number of messages
* Changed: simpler widget name

= 1.3.3 =
* Fixed: error checking in the json request

= 1.3.2 =
* Added: option to customize text on the user link below the list of tweets
* Fixed: now checks for errors when retrieving data from the Twitter API

= 1.3.1 =
* Fixed: now retrieve data in JSON format for better storage with transient API and faster data update

= 1.3.0 =
* Changed: use Transient API to cache Twitter results, in order to reduce direct requests to the Twitter API
* Added: option to add a link to the Twitter user page below the posts (CSS customizable via the "rstw_link_user" class)
* Added: option to create all the links on new window / tab
* Added: Italian translation

= 1.2.3 =
* Changed: a bit of UI (work by Frank Gregor)
* Added: switch for setting on/off a link of the title to the twitter user (work by Frank Gregor)
* Added: German translation (work by Frank Gregor)

= 1.2.2 =
* Fixed: Broken 1.2.1 regular expression cleaning

= 1.2.1 =
* Fixed: Better hashtag handling

= 1.2.0 =
* Changed: FB Widget API adoption (carries multiple Widgets support)

= 1.1.1 =
* Changed: direct to the twitter.com search link

= 1.1.0 =
* Changed: Use the new Twitter REST API
* Changed: Error handling cleaning

= 1.0.2 =
* Changed: Feed cache lifetime shortening to 30 minutes (default is 12 hours)

= 1.0.1 =
* Changed: Some more code cleaning and security option control

= 1.0.0 =
* Added: Option to skip tweets containing certain text
* Changed: New Wordpress Feed API adoption
* Changed: Code cleaning


== Upgrade Notice ==

= 1.3.13 =
A blocking bug appeared in the 1.3.12 release is fixed

= 1.3.9.1 =
A "saturday" bug appeared in the 1.3.9 release is fixed (the Twitter icon wasn't properly shown)

= 1.3.1 =
A blocking bug appeared in the 1.3.0 release is fixed

= 1.2.2 =
A blocking bug appeared in the 1.2.1 release is fixed

= 1.2.0 =
Due to the FB Widget API adoption, existing widgets need to be recreated

= 1.0.0 =
Initial release
