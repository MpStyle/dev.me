<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class MinifyJSON extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/MinifyJSON.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to minify...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Minified text...');
        
        parent::addJavascript('web/javascripts/Minify.min.js');
        parent::addCss('web/css/MinifyJSON.css');
        
        parent::setPageTitle("Minify JSON - Dev.me");
    }
}
