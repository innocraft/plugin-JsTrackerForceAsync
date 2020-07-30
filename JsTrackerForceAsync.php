<?php
/**
 * InnoCraft - the company of the makers of Piwik Analytics, the free/libre analytics platform
 *
 * @link https://www.innocraft.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\JsTrackerForceAsync;

class JsTrackerForceAsync extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return array(
            'Tracker.getJavascriptCode' => array('function' => 'makePiwikJsLoadSync', 'after' => true),
        );
    }

    public function makePiwikJsLoadSync(&$codeImpl, $parameters)
    {
        $codeImpl['loadAsync'] = true;
    }
}
