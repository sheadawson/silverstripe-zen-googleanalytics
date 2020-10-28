<?php

class ZenGoogleAnalytics extends Extension
{

    private static $ga_id;

    private static $enable_display_features = true;

    public function GAID()
    {
        if (Director::isLive()) {
            return Config::inst()->get('ZenGoogleAnalytics', 'ga_id');
        }
    }

    public function DisplayFeaturedEnabled()
    {
        return Config::inst()->get('ZenGoogleAnalytics', 'enable_display_features');
    }

    public function onAfterInit()
    {
        if ($this->GAID()) {
            Requirements::customScript($this->owner->renderWith('ZenGoogleAnalytics'), 'ZenGoogleAnalytics');
        }
    }
}
