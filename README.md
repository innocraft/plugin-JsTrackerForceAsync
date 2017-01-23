# Piwik JsTrackerForceAsync Plugin

## Description

This plugin is especially useful in combination with our [A/B Testing](https://plugins.piwik.org/AbTesting) feature
if you embed the tracking code directly in your website using the `SitesManager.getJavascriptTag` [HTTP API](https://developer.piwik.org/api-reference/reporting-api) method.

When you use A/B Testing and have at least one active experiment for your website, the JavaScript code will load 
synchronously to prevent the content to flickr. If you still want to load the Piwik JavaScript Tracking code async,
you can install this plugin and it will make sure to always generate the async code. 