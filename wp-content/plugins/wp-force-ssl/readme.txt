=== Plugin Name ===
Contributors: kosvrouvas, codesigns.gr
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8DH2U6LZZZLBL
Tags: ssl, force, https, security, ssl certificate, certificate, redirect
Requires at least: 3.9
Tested up to: 4.2
Stable Tag: 1.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Redirect all traffic from HTTP to HTTPS to all pages of your WordPress website.

The main purpose of this plugin is to fix a problem that occurred on some websites that while everything was served over HTTPS (even while navigating), if you specifically tried to access a page via HTTP (via url) it won't redirect to HTTPS.

= Notes: =
- You need an SSL Certificate in order for this plugin to work.
- You need to <strong>add https to the WordPress Address (URL) and Site Address (URL) parameters under General > Settings</strong>. (Required by WordPress itself)

== Installation ==
The main purpose of this plugin is to fix a problem that occurred on some websites that while everything was served over HTTPS (even while navigating), if you specifically tried to access a page via HTTP (via url) it won't redirect to HTTPS.

You need to <strong>add https to the WordPress Address (URL) and Site Address (URL) parameters under General > Settings</strong>. (Required by WordPress itself)

1. Add https to the WordPress Address (URL) and Site Address (URL) parameters under General > Settings. (Required by WordPress itself)
2. Install as a regular WordPress plugin.
3. Activate the plugin.
4. Done.

== Changelog ==
= 1.2.1 =
- Fixed an issue where some users were getting a error message for no valid header when activating the plugin.

= 1.2 =
- Dropping support for PHP 5.2:	Only 16% of the people that use WordPress use PHP 5.2, it's old, buggy, and insecure.