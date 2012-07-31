<?php

class ZenGoogleAnalytics extends SiteTreeExtension {

	public static $ga_id;

	function GAID() {
		return self::$ga_id;
	}
}
