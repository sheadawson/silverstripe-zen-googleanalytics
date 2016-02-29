silverstripe-zen-googleanalytics
================================

A simple module for easily adding google analytics js tracking code to a silverstripe site

Requirements
------------

SilverStripe 3.x

Installation
------------

Copy the module into your project root directory, run dev/build
Set your google analytics ID in your mysite yml config.

```
ZenGoogleAnalytics:
  ga_id: 'xxx'
```

Optionally enable the Google Analytics Display Features plugin:

```
ZenGoogleAnalytics:
  enable_display_features: true
```

Maintainer Contact
------------

shea@livesource.co.nz
