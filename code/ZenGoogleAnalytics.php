<?php

class ZenGoogleAnalytics extends SiteTreeExtension {

	public static $ga_id;

	function GAID() {
		if(Director::isLive()){
			return self::$ga_id;
		}
	}
}
