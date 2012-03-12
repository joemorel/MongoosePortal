=== Allow PHP in Posts and Pages ===
Contributors: Hit Reach
Donate link: 
Tags: post, pages, posts, code, php, shortcode, allow, sidebar, variables
Requires at least: 2.5
Tested up to: 3.3.1
Stable tag: 2.3

Allow PHP in posts and pages allows you to add php functionality to Wordpress Posts and Pages

== Description ==

Allow PHP in posts and pages adds the functionality to include PHP in your WordPress posts and pages by adding a simple shortcode [php] your code [/php]

This plugin strips away the automatically generated wordpress &lt;p&gt; and &lt;br/&gt; tags but still allows the addition of your own &lt;p&gt; and &lt;br/&gt; tags using a form of BBcode items such [p][/p] [br /]

Also, you can now save your most used PHP codes as "snippets" which you can insert into multiple pages at once.

With Version 2.2.0, the tag replacement system has been revamped which should reduce the need to escape [ and ] that shouldnt be changed &lt; and &gt; 

With Version 3 comes an experimental Advanced Filter Feature which allows you to use full php code inside post and pages, taking advantange of variables thoughout the entire post content, and functions, as well as no pesky tag replacement.

Currently the Code snippets and debugging are are not available for the Advanced Filter Feature, but we are working on it! Let us know what you think about the new filter!


== Usage ==

To add the PHP code to your post or page simply place any PHP code inside the shortcode tags.

For example: If you wanted to add content that is visible to a particular user id:

	[php] 
		global $user_ID; 
		if($user_ID == 1){ 
			echo "Hello World"; 
		} 
	[/php]

This code will output Hello World to only user id #1, and no one else

In addition, should this code not be working (for example a missing ";") simply just change the [php] to be [php debug=1]

	[php debug=1] 
		global 
		$user_ID; if($user_ID == 1){ 
			echo "Hello World" 
		} 
	[/php] 

Will result in the output:

	Parse error: syntax error, unexpected '}', expecting ',' or ';' in XXX : eval()'d code on line 5 
	global $user_ID; 
	if($user_ID == 1){ 
		echo "Hello World" 
	} 

As well as the normal debug tag, you can also enable a silent debug by setting silentdebug in the [php] tag to be 1 ([php debug=1 silentdebug=1]), this will output all debug information as comments in the source code

If you are upgrading Allow PHP In Posts and Pages from a version before 2.2.0 you may experience issues with the code being disrupted as the replacement method has been changed, however you can set the tag replacement method to be the older version in the plugin options or by adding mode=old to the [php] tag, similarly, if you wish to use the new method when you have the old method turn on in the plugin options, just add mode=new to the [php] tag

To call a pre-defined function from the Code Snippets page, add function=x to the [php] tag, where x is the function id
	

== Some Important Notes ==

This plugin strips away all instances of <p> and <br /> therefore code has been added so that if you wish to use tags in your output (e.g.):

	[php] 
		echo "hello <br /> world"; 
	[/php]

The < and > tags will need to be swapped for [ and ] respectively so <p> becomes [p] and </p> becomes [/p] which is converted back to <p> at runtime. these [ ] work for all tags (p, strong, em etc.).

	[php] 
		echo "hello [br /] world"; 
	[/php]

With code written pre-version 2.2.0 you may need to turn on support for the older replacement method as you may experience issues with the code being disrupted as the replacement method has been changed, however you can set the tag replacement method to be the older version in the plugin options or by adding mode=old to the [php] tag, similarly, if you wish to use the new method when you have the old method turn on in the plugin options, just add mode=new to the [php] tag. In the current release, only known html tags are altered by the code, other tags and square bracket items (such as PHP arrays) are no longer affected.

In version 2.2.0:beta-2 arrays cannot effectively access arrays and still convert tags, so you will need to write:
	echo "[p]".$myArray[0]."[/p]"
as
	$mya = $myArray[0];
	echo "[p]".$mya."[/p];

== Installation ==

1. Extract the zip file and drop the contents in the wp-content/plugins/ directory of your WordPress installation
1. Activate the Plugin from Plugins page

== Change log ==
= 1.0 =
 * Initial Release
= 1.1 =
 * Bug fix for the conversion of the right square bracket
= 1.2 =
 * Character Conversion Fixes
= 1.2.3 =
 * Fixed major issue with 1.2.2
= 2.0.0.RC1 =
 * Addition of Code Snippets function to the plugin
 * Minor Bug Fixes
 * New Options Pages
 * TinyMCE editor button
 * allow shortcodes in text widgets by default
= 2.1.0 =
 * Overall file tightening and maintenance
= 2.1.05 =
 * fix issue with using the tinyMCE editor while the blog installation is in a sub folder
= 2.2.0:beta =
 * HTML Tag replacement method changed
 * UI Design Tweeks
= 2.2.0:beta:3=
 * Tag replacement Tweeks
= 2.2.0:RC1 =
 * Finalisation of the tag replacement tweeks
= 2.3 =
 * Addition of Advanced Filter Experimental Feature

== Frequently Asked Questions ==
= What Tags Are Automatically Removed? =
Currently all &lt;br /&gt; and &lt;p&gt; (and its closing counterpart) tags are removed from the input code because these are the tags that Wordpress automatically add.

= How Do I Add Tags Without Them Being Stripped? =
If you want to echo a paragraph tag or a line break, or any other tag (strong, em etc) instead of enclosing them in &lt; and &gt; tags, enclose them in [ ] brackets for example [p] instead of &lt;p&gt; The square brackets are converted after the inital tags are stripped and function as normal tags.

= Thats All Good But I want To Include A [ and ] In My Output! =
The tag replacement system only replaces [ and ] when they are paired up and text content inside e.g. it wont replace [] and wont replace [hello[ but it will replace [hello], to prevent this, escape the opening [ with a \ so write \[hello]

= Can I still connect to non-wordpress databases? = 
Yes you can, just use the standard mysql_connect or the mysql_pconnect and their parameters.

= A function that was working before upgrading, no longer works = 
If you are upgrading Allow PHP In Posts and Pages from a version before 2.2.0 you may experience issues with the code being disrupted as the replacement method has been changed, however you can set the tag replacement method to be the older version in the plugin options or by adding mode=old to the [php] tag, similarly, if you wish to use the new method when you have the old method turn on in the plugin options, just add mode=new to the [php] tag

= The sample code provided on the plugin page doesnt work! =
On the plugin page, the code is written with spaces in the [php] tag, these need to be removed before the tag will work.

= I found a bug! =
Allow PHP in posts and pages is in beta stages, please let us know of any bugs you may find or any improvement suggestions you have.

= My Question Is Not Answered Here! =
If your question is not listed here please look on: <a href='http://www.hitreach.co.uk/wordpress-plugins/allow-php-in-posts-and-pages/' target="_blank" style='text-decoration:none;'>http://www.hitreach.co.uk/wordpress-plugins/allow-php-in-posts-and-pages/</a> and if the answer is not listed there, just leave a comment
