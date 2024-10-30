=== Just a Quote Widget ===
Tags: widget, quote
Requires at least: 2.8
Tested up to: 2.9.1
Stable tag: 0.1

Easily display any quote from any source in your sidebar with some basic 'quote-like' formatting (and the option to style it yourself).

== Description ==

The Just a Quote Widget allows you to easily configure a quote to appear in your blog's sidebar. Simply enter the title, quote, and source into the included input fields, and you're done. For ease of use, there is quote-like formatting already built into the widget; if you do, however, wish to style it yourself (via your theme's stylesheet), you're more than welcome. Simply select the "Style the quote yourself?" option, and the default formatting will be deactivated, allowing you to go CSS-crazy in your theme's stylesheet.

For those CSS bandits styling the widget themselves, use the <strong>.just-a-quote</strong> (for the quote text) and <strong>.just-a-quote-source</strong> (for the source text) classes in your theme's stylesheet.

Please submit any bug reports, support questions, or requests <a href="http://anthonybubel.com/contact">here</a>.

== Installation ==

1. Upload `just-a-quote.php` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins -> Installed' menu in your dashboard.
1. Add the 'Just a Quote' Widget to your sidebar via 'Appearance -> Widgets' in your dashboard and configure it accordingly.

== Frequently Asked Questions ==

= How do I style this widget's output myself? =

First, make sure that you select the "Style the quote yourself?" checkbox found within the widget's options panel. You can then add the following classes to your theme's stylesheet and customize them as you wish:

`.just-a-quote {
*CSS properties to style the quote text.*
}`

`.just-a-quote-source {
*CSS properties to style the source text.*
}`

= Can I have this automatically pull from a source/service/database of quotes (instead of manually entering them)? =

Not at the moment.