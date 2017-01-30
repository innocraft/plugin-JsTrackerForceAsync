# Piwik JsTrackerForceAsync Plugin

## Description

This plugin is especially useful in combination with our [A/B Testing](https://plugins.piwik.org/AbTesting) feature
if you embed the tracking code directly in your website using the `SitesManager.getJavascriptTag` [HTTP API](https://developer.piwik.org/api-reference/reporting-api) method.

When you use A/B Testing and have at least one active experiment for your website, the JavaScript code will load 
synchronously to prevent the content to flickr. If you still want to load the Piwik JavaScript Tracking code async,
you can install this plugin and it will make sure to always generate the async code. 

### About InnoCraft

We at [InnoCraft](https://www.innocraft.com) are the creators of Piwik and know it better than anyone else. This means all plugins are perfectly integrated into Piwik and come with outstanding features and quality to grow your business. We help our clients get started, configure, monitor and make the most of their Piwik analytics service. We also offer unique analytics products and services that help grow your business and meet the needs of small, medium and large businesses alike.
