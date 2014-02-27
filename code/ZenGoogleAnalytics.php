<?php

class ZenGoogleAnalytics extends SiteTreeExtension {

	private static $ga_id;

	function GAID() {
		if(Director::isLive()){
			return Config::inst()->get('ZenGoogleAnalytics', 'ga_id');
		}
	}

	public function onAfterInit(){
		if($this->GAID()){
			Requirements::customScript($this->owner->renderWith('ZenGoogleAnalytics'), 'ZenGoogleAnalytics');	
		}
	}
}
