<?php

class ZenGoogleAnalytics extends SiteTreeDecorator {

	public static $ga_id;

	function GAID() {
		if(Director::isLive() self::) {
			return self::$ga_id;
		}
	}

	public function forTemplate(){
		return $this->renderWith(array('ZenGoogleAnalytics'));
	}
}
