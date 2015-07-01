<?php
require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class Base64Decode extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Base64Decode.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to decode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Decoded text...');
        
        parent::addJavascript('web/javascripts/Base64.min.js');
        parent::addCss('web/css/Base64Decode.css');
        
        parent::setPageTitle("Base64 decode - Dev.me");
    }
}
