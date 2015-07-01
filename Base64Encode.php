<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class Base64Encode extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Base64Encode.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
        
        parent::addJavascript('web/javascripts/Base64.min.js');
        parent::addCss('web/css/Base64Encode.css');
        
        parent::setPageTitle("Base64 encode - Dev.me");
    }
}
