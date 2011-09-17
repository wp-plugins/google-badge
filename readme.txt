=== Plugin Name ===
Contributors: 9gaurav
Donate link: http://gauravganoo.com/
Tags: google, plus, widget, badge
Requires at least: 2.0.2
Tested up to: 3.1
Stable tag: 1.0

A Google+ Badge displays your profile information for your blog or site.

== Description ==
A cool , simple sidebar widget for Google Plus profile badge.
Displays your Google+ profile pic, short information and link to your Google+ profile.

== Installation ==

*Install and Activate*

1. Unzip the downloaded Google-Badge zip file
2. Upload the `Google-Badge` folder and its contents into the `wp-content/plugins/` directory of your WordPress installation
3. Activate Google-Badge from Plugins page

*Implement*

Anywhere in your site where you want to display this badge just call thi

1) Open the theme files where you'd like  display this badge.

2) Place following function call and pass it your Google+ id. E.g. If Google+ id is 1234567890123  then code will be:

	<?php if(function_exists('googleBadge')) {
		googleBadge("1234567890123");
	} ?>


== Frequently Asked Questions ==
N/A

== Screenshots ==

1. Google + Badge displaying information of Larry Page CEO


== Changelog ==

= 1.0 =
* Initial release.

 == Upgrade Notice ==
N/A
