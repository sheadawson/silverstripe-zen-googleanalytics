silverstripe-zen-googleanalytics
================================

A simple module for easily adding google analytics tracking to a silverstripe site

Requirements
------------

SilverStripe 2.x or 3.x

Installation
------------

Copy the module into your project root directory, name it zen-googleanalytics, run dev/build
Set your google analytics ID in your mysite/_config.php, eg.

	ZenGoogleAnalytics::$ga_id = 'xxx';
	
Then place the template include in your themes Page.ss

	<% include ZenGoogleAnalytics %>

Maintainer Contact
------------

Shea@silverstripe.com.au