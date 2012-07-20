<?php

class ZenGoogleAnalytics extends SiteTreeDecorator {

	public static $ga_id;

	function GAID() {
		return self::$ga_id;
	}
}
